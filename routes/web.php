<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ElementoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ColaboradorDashboardController;

// Rutas de autenticación
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rutas protegidas (solo para usuarios autenticados)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        if (auth()->user()->rol === 'administrador') {
            return view('dashboard.admin');
        }
        return redirect()->route('colaborador.dashboard');
    })->name('dashboard');

    // Módulo del Colaborador
    Route::get('/colaborador/dashboard', [ColaboradorDashboardController::class, 'index'])->name('colaborador.dashboard');
    Route::get('/colaborador/solicitar-elementos', [ColaboradorDashboardController::class, 'solicitarElementos'])->name('colaborador.solicitar');
    Route::post('/colaborador/crear-pedido', [ColaboradorDashboardController::class, 'crearPedido'])->name('colaborador.crear-pedido');

    // Módulos del Administrador
    Route::middleware('can:manage-colaboradores')->group(function () {
        // Rutas de recursos sin vinculación de modelo
        Route::get('colaboradores', [ColaboradorController::class, 'index'])->name('colaboradores.index');
        Route::get('colaboradores/create', [ColaboradorController::class, 'create'])->name('colaboradores.create');
        Route::post('colaboradores', [ColaboradorController::class, 'store'])->name('colaboradores.store');
        Route::get('colaboradores/{id}', [ColaboradorController::class, 'show'])->name('colaboradores.show');
        Route::get('colaboradores/{id}/edit', [ColaboradorController::class, 'edit'])->name('colaboradores.edit');
        Route::put('colaboradores/{id}', [ColaboradorController::class, 'update'])->name('colaboradores.update');
        Route::delete('colaboradores/{id}', [ColaboradorController::class, 'destroy'])->name('colaboradores.destroy');
    });

    Route::middleware('can:manage-inventario')->group(function () {
        Route::resource('categorias', CategoriaController::class);
        Route::resource('elementos', ElementoController::class);
    });
    Route::middleware('can:manage-entregas')->group(function () {
        Route::resource('pedidos', PedidoController::class)->only(['index', 'create', 'store', 'show']);
    });
});

Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('dashboard');
    }
    return redirect()->route('login');
});
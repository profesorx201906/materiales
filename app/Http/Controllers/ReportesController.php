<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Colaborador;
use App\Models\Categoria;
use Illuminate\Support\Facades\Auth;

class ReportesController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $pedidos = collect(); // Inicializamos una colección vacía

        if ($user->rol === 'administrador') {
            // El administrador ve todos los pedidos
            $query = Pedido::with('colaborador', 'elementos');

            if ($request->filled('colaborador_id')) {
                $query->where('colaborador_id', $request->colaborador_id);
            }
            if ($request->filled('categoria_id')) {
                // Filtramos por elementos que pertenecen a una categoría específica
                $query->whereHas('elementos', function ($q) use ($request) {
                    $q->where('categoria_id', $request->categoria_id);
                });
            }

            $pedidos = $query->latest()->paginate(25);
            $colaboradores = Colaborador::all();
            $categorias = Categoria::all();

            return view('reports.reports', compact('pedidos', 'colaboradores', 'categorias', 'user'));

        } elseif ($user->rol === 'colaborador') {
            // El colaborador solo ve sus propios pedidos
            $colaborador = Colaborador::where('nombre', $user->nombre_usuario)->first();
            if ($colaborador) {
                $pedidos = Pedido::with('elementos')->where('colaborador_id', $colaborador->id)->latest()->paginate(25);
            }

            return view('reports.reports', compact('pedidos', 'user'));
        }

        return redirect()->route('dashboard');
    }
}
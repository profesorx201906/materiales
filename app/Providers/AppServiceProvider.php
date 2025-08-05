<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Usuario;

class AppServiceProvider extends ServiceProvider
{
    protected $policies = [];

    public function boot(): void
    {
        Gate::define('manage-colaboradores', function (Usuario $user) {
            return $user->rol === 'administrador';
        });

        Gate::define('manage-inventario', function (Usuario $user) {
            return $user->rol === 'administrador';
        });
        
        // Nuevo Gate para gestionar las entregas
        Gate::define('manage-entregas', function (Usuario $user) {
            return $user->rol === 'administrador';
        });
    }
}
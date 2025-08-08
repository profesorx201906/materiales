<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Administrador</title>
    <style>
        body { font-family: sans-serif; margin: 2rem; }
        .container { max-width: 960px; margin: auto; }
        h1 { text-align: center; }
        .module-list { list-style: none; padding: 0; display: flex; flex-wrap: wrap; justify-content: center; gap: 1rem; }
        .module-list li { background-color: #f0f0f0; padding: 2rem; border-radius: 8px; text-align: center; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .module-list a { text-decoration: none; font-size: 1.2rem; font-weight: bold; color: #007bff; }
        .logout-btn { color: #dc3545; text-decoration: none; font-size: 0.9rem; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Dashboard de Administrador</h1>
        <p style="text-align: right;">Bienvenido, {{ auth()->user()->nombre_usuario }}! <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="logout-btn">Cerrar Sesión</a></p>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

        <hr>

        <h2>Módulos</h2>
        <ul class="module-list">
            <li><a href="{{ route('colaboradores.index') }}">Gestión de Colaboradores</a></li>
            <li><a href="{{ route('categorias.index') }}">Gestión de Categorías</a></li>
            <li><a href="{{ route('elementos.index') }}">Gestión de Elementos</a></li>
            <li><a href="{{ route('pedidos.index') }}">Gestión de Pedidos</a></li>
            <li><a href="{{ route('reports.index') }}">Generar Reportes</a></li>
            <li><a href="{{ route('csv.import.form') }}">Importar Elementos (CSV)</a></li>
        </ul>
    </div>
</body>
</html>
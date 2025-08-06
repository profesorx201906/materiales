<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Elementos</title>
    <style>
        body { font-family: sans-serif; margin: 2rem; }
        .container { max-width: 960px; margin: auto; }
        h1 { text-align: center; }
        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem; }
        .alert { padding: 1rem; border-radius: 4px; margin-bottom: 1rem; }
        .alert-success { background-color: #d4edda; color: #155724; border-color: #c3e6cb; }
        .btn { padding: 0.5rem 1rem; border-radius: 4px; text-decoration: none; color: white; }
        .btn-success { background-color: #28a745; }
        .btn-warning { background-color: #ffc107; color: black; }
        .btn-danger { background-color: #dc3545; }
        .btn-secondary { background-color: #6c757d; }
        table { width: 100%; border-collapse: collapse; margin-top: 1rem; }
        th, td { padding: 0.75rem; border: 1px solid #dee2e6; text-align: left; }
        th { background-color: #f8f9fa; }
        form { display: inline; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Gestión de Elementos</h1>
            <a href="{{ route('elementos.create') }}" class="btn btn-success">Crear Nuevo Elemento</a>
        </div>
        <p><a href="{{ route('dashboard') }}" class="btn btn-secondary">Volver al Dashboard</a></p>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Unidad de Medida</th> <th>Categoría</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($elementos as $elemento)
                    <tr>
                        <td>{{ $elemento->id }}</td>
                        <td>{{ $elemento->nombre }}</td>
                        <td>${{ number_format($elemento->precio_unitario, 2) }}</td>
                        <td>{{ $elemento->unidad_de_medida ?? 'N/A' }}</td> <td>{{ $elemento->categoria->nombre }}</td>
                        <td>
                            <a href="{{ route('elementos.edit', $elemento) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('elementos.destroy', $elemento) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?');">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">No hay elementos registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        
        {{ $elementos->links() }}
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes de Pedidos</title>
    <style>
        body { font-family: sans-serif; margin: 2rem; }
        .container { max-width: 1100px; margin: auto; }
        h1 { text-align: center; }
        .filters { margin-bottom: 2rem; }
        .filters label { font-weight: bold; }
        .filters select { padding: 0.5rem; border-radius: 4px; border: 1px solid #ccc; margin-right: 1rem; }
        .btn { padding: 0.5rem 1rem; border-radius: 4px; text-decoration: none; color: white; border: none; cursor: pointer; }
        .btn-primary { background-color: #007bff; }
        .btn-secondary { background-color: #6c757d; }
        table { width: 100%; border-collapse: collapse; margin-top: 1rem; }
        th, td { padding: 0.75rem; border: 1px solid #dee2e6; text-align: left; vertical-align: top; }
        th { background-color: #f8f9fa; }
        .badge { display: inline-block; padding: 0.35em 0.65em; font-size: 0.75em; font-weight: 700; line-height: 1; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25rem; color: #fff; }
        .badge-success { background-color: #28a745; }
        .badge-warning { background-color: #ffc107; color: black; }
        .badge-danger { background-color: #dc3545; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Reportes de Pedidos</h1>
        <p><a href="{{ route('dashboard') }}" class="btn btn-secondary">Volver al Dashboard</a></p>

        @if ($user->rol === 'administrador')
            <h3>Filtros de Reporte</h3>
            <div class="filters">
                <form action="{{ route('reports.index') }}" method="GET">
                    <label for="colaborador_id">Colaborador:</label>
                    <select name="colaborador_id">
                        <option value="">Todos</option>
                        @foreach ($colaboradores as $colaborador)
                            <option value="{{ $colaborador->id }}" {{ request('colaborador_id') == $colaborador->id ? 'selected' : '' }}>
                                {{ $colaborador->nombre }}
                            </option>
                        @endforeach
                    </select>

                    <label for="categoria_id">Categoría:</label>
                    <select name="categoria_id">
                        <option value="">Todas</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}" {{ request('categoria_id') == $categoria->id ? 'selected' : '' }}>
                                {{ $categoria->nombre }}
                            </option>
                        @endforeach
                    </select>

                    <button type="submit" class="btn btn-primary">Aplicar Filtros</button>
                    <a href="{{ route('reports.index') }}" class="btn btn-secondary">Limpiar Filtros</a>
                </form>
            </div>
        @endif

        <h3>Listado de Pedidos</h3>
        <table>
            <thead>
                <tr>
                    <th>ID Pedido</th>
                    @if ($user->rol === 'administrador')
                        <th>Colaborador</th>
                    @endif
                    <th>Fecha</th>
                    <th>Estado</th>
                    <th>Elemento</th>
                    <th>Cantidad</th>
                    <th>Valor Total</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pedidos as $pedido)
                    @php
                        $totalElements = count($pedido->elementos);
                    @endphp
                    @foreach ($pedido->elementos as $key => $elemento)
                        <tr>
                            @if ($key === 0)
                                <td rowspan="{{ $totalElements }}">{{ $pedido->id }}</td>
                                @if ($user->rol === 'administrador')
                                    <td rowspan="{{ $totalElements }}">{{ $pedido->colaborador->nombre }}</td>
                                @endif
                                <td rowspan="{{ $totalElements }}">{{ $pedido->fecha_pedido }}</td>
                                <td rowspan="{{ $totalElements }}">
                                    @if ($pedido->estado == 'pendiente')
                                        <span class="badge badge-warning">Pendiente</span>
                                    @elseif ($pedido->estado == 'aprobado')
                                        <span class="badge badge-success">Aprobado</span>
                                    @else
                                        <span class="badge badge-danger">Rechazado</span>
                                    @endif
                                </td>
                            @endif
                            <td>{{ $elemento->descripcion }}</td>
                            <td>{{ $elemento->pivot->cantidad }}</td>
                            @if ($key === 0)
                                <td rowspan="{{ $totalElements }}">${{ number_format($pedido->valor_total, 2) }}</td>
                            @endif
                        </tr>
                    @endforeach
                @empty
                    <tr>
                        <td colspan="{{ $user->rol === 'administrador' ? 7 : 6 }}">No hay pedidos que coincidan con los criterios.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        
        {{ $pedidos->links() }}
    </div>
</body>
</html>
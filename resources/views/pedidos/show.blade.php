<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Pedido #{{ $pedido->id }}</title>
    <style>
        body { font-family: sans-serif; margin: 2rem; }
        .container { max-width: 800px; margin: auto; background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        h1 { text-align: center; }
        .details-list { list-style: none; padding: 0; }
        .details-list li { margin-bottom: 1rem; }
        .details-list strong { font-weight: bold; }
        table { width: 100%; border-collapse: collapse; margin-top: 1rem; }
        th, td { padding: 0.75rem; border: 1px solid #dee2e6; text-align: left; }
        th { background-color: #f8f9fa; }
        .btn { padding: 0.5rem 1rem; border-radius: 4px; text-decoration: none; color: white; }
        .btn-secondary { background-color: #6c757d; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detalles del Pedido #{{ $pedido->id }}</h1>

        <ul class="details-list">
            <li><strong>Colaborador:</strong> {{ $pedido->colaborador->nombre }}</li>
            <li><strong>Valor Máximo del Colaborador:</strong> ${{ number_format($pedido->colaborador->valor_maximo_dinero, 2) }}</li>
            <li><strong>Fecha del Pedido:</strong> {{ $pedido->fecha_pedido }}</li>
            <li><strong>Valor Total del Pedido:</strong> ${{ number_format($pedido->valor_total, 2) }}</li>
            <li><strong>Estado:</strong> {{ $pedido->estado }}</li>
        </ul>

        <h2>Elementos del Pedido</h2>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedido->elementos as $elemento)
                    <tr>
                        <td>{{ $elemento->nombre }}</td>
                        <td>{{ $elemento->pivot->cantidad }}</td>
                        <td>${{ number_format($elemento->pivot->precio_unitario_en_pedido, 2) }}</td>
                        <td>${{ number_format($elemento->pivot->cantidad * $elemento->pivot->precio_unitario_en_pedido, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <p style="margin-top: 2rem;"><a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Volver al listado</a></p>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitar Elementos</title>
    <style>
        body { font-family: sans-serif; margin: 2rem; }
        .form-container { max-width: 800px; margin: auto; background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        h1, h2 { text-align: center; }
        .balance-info { text-align: center; margin-bottom: 2rem; padding: 1rem; background-color: #e9ecef; border-radius: 8px; }
        .balance-info p { font-size: 1.2rem; margin: 0; }
        .element-row { display: flex; gap: 1rem; align-items: center; margin-bottom: 1rem; padding: 0.5rem; border: 1px solid #eee; border-radius: 4px; }
        
        /* Ajuste para que el select sea más grande */
        .element-row select.elemento-select { flex: 2; padding: 0.75rem; border: 1px solid #ccc; border-radius: 4px; }
        .element-row input.cantidad-input { flex: 1; padding: 0.75rem; border: 1px solid #ccc; border-radius: 4px; }
        
        .add-btn { background-color: #28a745; color: white; border: none; cursor: pointer; padding: 0.5rem 1rem; border-radius: 4px; }
        .remove-btn { background-color: #dc3545; color: white; border: none; cursor: pointer; padding: 0.5rem 1rem; border-radius: 4px; }
        .btn { padding: 0.5rem 1rem; border-radius: 4px; text-decoration: none; color: white; }
        .btn-primary { background-color: #007bff; border: none; cursor: pointer; }
        .btn-secondary { background-color: #6c757d; }
        .error { color: #dc3545; font-size: 0.8rem; margin-top: 0.25rem; }
        .total-summary { margin-top: 1.5rem; text-align: center; }
        .total-summary p { margin: 0.5rem 0; font-size: 1.1rem; font-weight: bold; }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Solicitar Elementos</h1>
        <p><a href="{{ route('colaborador.dashboard') }}" class="btn btn-secondary">Volver al Dashboard</a></p>
        <div class="balance-info">
            <p><strong>Tu Valor Máximo:</strong> ${{ number_format($colaborador->valor_maximo_dinero, 2) }}</p>
            <p><strong>Valor Pendiente:</strong> ${{ number_format($valor_pendiente, 2) }}</p>
            <p><strong>Tu Saldo Disponible:</strong> <span id="valor-disponible">${{ number_format($valor_disponible, 2) }}</span></p>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('colaborador.crear-pedido') }}" method="POST">
            @csrf

            <h3>Elementos a solicitar</h3>
            <div id="elementos-container">
                <div class="element-row">
                    <select name="elementos[0][elemento_id]" class="elemento-select" required onchange="calculateTotals()">
                        <option value="">Selecciona un elemento</option>
                        @foreach ($elementos as $elemento)
                            <option value="{{ $elemento->id }}" title="{{ $elemento->descripcion }}">
                                {{ $elemento->nombre }} (${{ number_format($elemento->precio_unitario, 2) }})
                                @if($elemento->unidad_de_medida)
                                    ({{ $elemento->unidad_de_medida }})
                                @endif
                            </option>
                        @endforeach
                    </select>
                    <input type="number" name="elementos[0][cantidad]" class="cantidad-input" placeholder="Cantidad" min="1" required oninput="calculateTotals()">
                    <button type="button" class="remove-btn" onclick="this.parentNode.remove(); calculateTotals();">Eliminar</button>
                </div>
            </div>
            
            <button type="button" class="add-btn" onclick="addElemento()">Añadir Otro Elemento</button>
            
            <div class="total-summary">
                <p><strong>Total del Pedido:</strong> <span id="total-pedido">$0.00</span></p>
                <p><strong>Saldo Restante:</strong> <span id="saldo-restante">${{ number_format($valor_disponible, 2) }}</span></p>
            </div>
            <br>

            <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
            <a href="{{ route('colaborador.dashboard') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <script>
        const elementos = @json($elementos->keyBy('id'));
        const valorDisponibleInicial = {{ $valor_disponible }};
        let elementoIndex = 1;

        function calculateTotals() {
            let totalPedido = 0;
            const elementRows = document.querySelectorAll('#elementos-container .element-row');

            elementRows.forEach(row => {
                const select = row.querySelector('.elemento-select');
                const cantidadInput = row.querySelector('.cantidad-input');
                
                const elementoId = select.value;
                const cantidad = cantidadInput.value;

                if (elementoId && cantidad > 0) {
                    const elemento = elementos[elementoId];
                    if (elemento) {
                        totalPedido += parseFloat(elemento.precio_unitario) * parseFloat(cantidad);
                    }
                }
            });

            const saldoRestante = valorDisponibleInicial - totalPedido;

            document.getElementById('total-pedido').innerText = `$${totalPedido.toFixed(2)}`;
            document.getElementById('saldo-restante').innerText = `$${saldoRestante.toFixed(2)}`;
            
            const saldoRestanteElement = document.getElementById('saldo-restante');
            const submitButton = document.querySelector('.btn-primary');

            if (saldoRestante < 0) {
                saldoRestanteElement.style.color = 'red';
                submitButton.disabled = true;
            } else {
                saldoRestanteElement.style.color = 'black';
                submitButton.disabled = false;
            }
        }

        function addElemento() {
            const container = document.getElementById('elementos-container');
            const newRow = document.createElement('div');
            newRow.classList.add('element-row');
            newRow.innerHTML = `
                <select name="elementos[${elementoIndex}][elemento_id]" class="elemento-select" required onchange="calculateTotals()">
                    <option value="">Selecciona un elemento</option>
                    @foreach ($elementos as $elemento)
                        <option value="{{ $elemento->id }}" title="{{ $elemento->descripcion }}">
                            {{ $elemento->nombre }} (${{ number_format($elemento->precio_unitario, 2) }})
                            @if($elemento->unidad_de_medida)
                                ({{ $elemento->unidad_de_medida }})
                            @endif
                        </option>
                    @endforeach
                </select>
                <input type="number" name="elementos[${elementoIndex}][cantidad]" class="cantidad-input" placeholder="Cantidad" min="1" required oninput="calculateTotals()">
                <button type="button" class="remove-btn" onclick="this.parentNode.remove(); calculateTotals();">Eliminar</button>
            `;
            container.appendChild(newRow);
            elementoIndex++;
            calculateTotals();
        }

        document.addEventListener('DOMContentLoaded', () => {
            const container = document.getElementById('elementos-container');
            container.addEventListener('change', (event) => {
                if (event.target.classList.contains('elemento-select')) {
                    calculateTotals();
                }
            });
            container.addEventListener('input', (event) => {
                if (event.target.classList.contains('cantidad-input')) {
                    calculateTotals();
                }
            });
            calculateTotals();
        });
    </script>
</body>
</html>
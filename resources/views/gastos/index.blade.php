<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Gastos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Gestión de Gastos</h1>

        <!-- Formulario de filtro -->
        <form method="GET" action="{{ route('gastos.index') }}" class="mb-4">
            <div class="row">
                <div class="col-md-4">
                    <label for="fecha_inicio" class="form-label">Fecha Inicio:</label>
                    <input type="date" id="fecha_inicio" name="fecha_inicio" class="form-control" value="{{ $fechaInicio ?? '' }}">
                </div>
                <div class="col-md-4">
                    <label for="fecha_fin" class="form-label">Fecha Fin:</label>
                    <input type="date" id="fecha_fin" name="fecha_fin" class="form-control" value="{{ $fechaFin ?? '' }}">
                </div>
                <div class="col-md-4 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100">Filtrar</button>
                </div>
            </div>
        </form>

        <!-- Tabla de gastos -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descripción</th>
                    <th>Monto</th>
                    <th>Fecha</th>
                    <th>Empleado</th>
                    <th>Departamento</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($gastos as $gasto)
                    <tr>
                        <td>{{ $gasto->id }}</td>
                        <td>{{ $gasto->descripcion }}</td>
                        <td>${{ number_format($gasto->monto, 2) }}</td>
                        <td>{{ $gasto->fecha }}</td>
                        <td>{{ $gasto->empleado->nombre }}</td>
                        <td>{{ $gasto->departamento->nombre }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No hay gastos en este rango de fechas.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Total de gastos -->
        <h3>Total de Gastos: ${{ number_format($totalGastos, 2) }}</h3>
    </div>
</body>
</html>

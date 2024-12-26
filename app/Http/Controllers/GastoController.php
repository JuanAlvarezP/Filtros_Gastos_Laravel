<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gasto;

class GastoController extends Controller
{
    public function index(Request $request)
    {
        // Obtener las fechas del formulario
        $fechaInicio = $request->input('fecha_inicio');
        $fechaFin = $request->input('fecha_fin');

        // Consulta base
        $query = Gasto::query();

        // Aplicar filtro por rango de fechas si se proporcionan
        if ($fechaInicio && $fechaFin) {
            $query->whereBetween('fecha', [$fechaInicio, $fechaFin]);
        }

        // Obtener los gastos filtrados con sus relaciones
        $gastos = $query->with(['empleado', 'departamento'])->get();

        // Calcular el total de los gastos
        $totalGastos = $gastos->sum('monto');

        // Retornar vista con los datos
        return view('gastos.index', compact('gastos', 'totalGastos', 'fechaInicio', 'fechaFin'));
    }
}

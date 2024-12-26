<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gasto;

class GastoSeeder extends Seeder
{
    public function run()
    {
        Gasto::create([
            'descripcion' => 'Compra de suministros',
            'monto' => 500.00,
            'fecha' => '2024-10-20',
            'empleado_id' => 1,
            'departamento_id' => 1,
        ]);
        Gasto::create([
            'descripcion' => 'Pago de facturas',
            'monto' => 1500.00,
            'fecha' => '2024-11-22',
            'empleado_id' => 2,
            'departamento_id' => 2,
        ]);
        Gasto::create([
            'descripcion' => 'Capacitación de empleados',
            'monto' => 2000.00,
            'fecha' => '2024-12-23',
            'empleado_id' => 3,
            'departamento_id' => 3,
        ]);
        Gasto::create([
            'descripcion' => 'Compra de equipos',
            'monto' => 3000.00,
            'fecha' => '2024-12-21',
            'empleado_id' => 1,
            'departamento_id' => 1,
        ]);
        Gasto::create([
            'descripcion' => 'Consultoría externa',
            'monto' => 2500.00,
            'fecha' => '2024-12-24',
            'empleado_id' => 2,
            'departamento_id' => 2,
        ]);
    }
}

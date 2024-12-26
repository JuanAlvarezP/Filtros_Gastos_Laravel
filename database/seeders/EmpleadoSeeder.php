<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empleado;

class EmpleadoSeeder extends Seeder
{
    public function run()
    {
        Empleado::create(['nombre' => 'Juan Pérez', 'departamento_id' => 1]);
        Empleado::create(['nombre' => 'Ana Gómez', 'departamento_id' => 2]);
        Empleado::create(['nombre' => 'Luis Martínez', 'departamento_id' => 3]);
    }
}

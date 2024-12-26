<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Departamento;

class DepartamentoSeeder extends Seeder
{
    public function run()
    {
        Departamento::create(['nombre' => 'Administración']);
        Departamento::create(['nombre' => 'Finanzas']);
        Departamento::create(['nombre' => 'Recursos Humanos']);
    }
}

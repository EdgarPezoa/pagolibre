<?php

use Illuminate\Database\Seeder;
use App\Models\EstadoModel;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EstadoModel::create([
            'nombre' => "Pendiente de pago"
        ]);

        EstadoModel::create([
            'nombre' => "Pagada"
        ]);

        EstadoModel::create([
            'nombre' => "Rechazada"
        ]);

        EstadoModel::create([
            'nombre' => "Anulada"
        ]);
    }
}

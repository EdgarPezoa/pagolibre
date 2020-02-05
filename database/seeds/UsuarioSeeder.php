<?php

use Illuminate\Database\Seeder;
use App\Models\UsuarioModel;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UsuarioModel::create([
            'email' => 'edgar@scek.cl',
            'password' => bcrypt('Eddy'),
        ]);
        UsuarioModel::create([
            'email' => 'rodolfo@karkon.cl',
            'password' => bcrypt('Rodolfox'),
        ]);
    }
}
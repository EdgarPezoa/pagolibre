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
            'email' => 'edgar@gmail.com',
            'password' => bcrypt('Eddy'),
            'device' => 4
        ]);
        UsuarioModel::create([
            'email' => 'rodolfo@gmail.com',
            'password' => bcrypt('Rodolfox'),
            'device' => 4
        ]);

        UsuarioModel::create([
            'email' => 'fabian@gmail.com',
            'password' => bcrypt('Fabian'),
            'device' => 4
        ]);
    }
}

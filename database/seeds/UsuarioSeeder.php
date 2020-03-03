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
            'device' => 4,
            'nombre'=>'Edgar',
            'apellido'=>'Pezoa',
            'direccion' =>'Direccion',
            'departamento' =>'Departamento',
            'telefono' => '+45656565',
        ]);
        UsuarioModel::create([
            'email' => 'rodolfo@gmail.com',
            'password' => bcrypt('Rodolfox'),
            'device' => 4,
            'nombre'=>'Rodolfo',
            'apellido'=>'Aranguiz',
            'direccion' =>'Direccion',
            'departamento' =>'Departamento',
            'telefono' => '+45656565',
        ]);

        UsuarioModel::create([
            'email' => 'fabian@gmail.com',
            'password' => bcrypt('Fabian'),
            'device' => 4,
            'nombre'=>'Fabian',
            'apellido'=>'Olave',
            'direccion' =>'Direccion',
            'departamento' =>'Departamento',
            'telefono' => '+45656565',
        ]);
    }
}

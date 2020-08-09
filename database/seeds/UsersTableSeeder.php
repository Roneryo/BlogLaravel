<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into tipoUsuario (descripcion) values (?)', ['SuperUsuario']);
        DB::insert('insert into tipoUsuario (descripcion) values (?)', ['Admin']);
        DB::insert('insert into tipoUsuario (descripcion) values (?)', ['Usuario']);
        DB::insert('insert into estados (descripcion) values (?)', ['Activo']);
        DB::insert('insert into estados (descripcion) values (?)', ['Inactivo']);
        // DB::insert('insert into estados (descripcion) values (?)', ['Baneado']);
        User::create([
            'nombre'=>'roner',
            'apellido'=>'ortega',
            'password'=>'mercado2',
            'email'=>'roner.ortega@gmail.com',
            'tipousuario_id'=>'1',
            'estado_id'=>'1',
            'username'=>'rotd'
        ]);
        factory(User::class,10)->create();

    }
}

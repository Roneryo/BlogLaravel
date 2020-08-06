<?php

use App\Comentarios;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PublicacionTableSeeder::class);
        $this->call(ComentariosTableSeeder::class);

    }
}

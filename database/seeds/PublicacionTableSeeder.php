<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Publicaciones;
use App\User;

class PublicacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Publicaciones::class,5)->create();
    }
}

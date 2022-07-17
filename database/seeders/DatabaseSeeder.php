<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alumno;
use App\Models\Maestro;
use App\Models\Asignatura;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            AlumnoSeeder::class,
            MaestroSeeder::class,
            AsignaturaSeeder::class,
        


        ]);
    }
}

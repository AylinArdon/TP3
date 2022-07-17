<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Maestro;

class MaestroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Maestro::factory(1000)->create();
    }
}

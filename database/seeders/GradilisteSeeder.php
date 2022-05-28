<?php

namespace Database\Seeders;

use App\Models\Gradiliste;
use Illuminate\Database\Seeder;

class GradilisteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gradiliste::factory()->count(30)->create();
    }
}

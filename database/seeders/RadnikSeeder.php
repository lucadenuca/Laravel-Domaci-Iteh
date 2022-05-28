<?php

namespace Database\Seeders;

use App\Models\Radnik;
use Illuminate\Database\Seeder;

class RadnikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Radnik::factory()->count(80)->create();
    }
}

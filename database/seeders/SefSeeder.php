<?php

namespace Database\Seeders;

use App\Models\Sef;
use Illuminate\Database\Seeder;

class SefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sef::factory()->count(50)->create();
    }
}

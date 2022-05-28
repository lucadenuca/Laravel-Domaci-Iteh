<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $gseed = new GradilisteSeeder;
        $rseed = new RadnikSeeder;
        $sseed = new SefSeeder;
        $rseed->run();
        $sseed->run();
        $gseed->run();
    }
}

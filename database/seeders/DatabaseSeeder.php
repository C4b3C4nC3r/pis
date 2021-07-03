<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\x_example;
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
        x_example::factory(75)->create();
        User::factory(5)->create();

    }
}

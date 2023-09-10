<?php

namespace Database\Seeders;

use Database\Factories\HolidaysFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(
            [UserSeeder::class]
        );
    }
}

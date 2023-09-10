<?php

namespace Database\Seeders;

use App\Models\Contracts;
use App\Models\Holidays;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        User::factory()
            ->count(5)
            ->has(Contracts::factory(2))
            ->create();
    }
}

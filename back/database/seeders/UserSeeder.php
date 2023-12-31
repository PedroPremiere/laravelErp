<?php

    namespace Database\Seeders;

    use App\Models\Contracts;
    use App\Models\Holidays;
    use Illuminate\Database\Seeder;
    use App\Models\User;
    use Tests\Helpers\TruncateService;

    class UserSeeder extends Seeder
    {
        static function seedOneWithDetails()
        {
            return User::factory()
                    ->has(
                        Contracts::factory(2)->has(
                            Holidays::factory(3)
                        )
                    )
                       ->create();
        }

        /**
         * Run the database seeds.
         */
        public function run(): void
        {
            TruncateService::truncate();
            UserSeeder::seedWithForeign();
        }

        static function seedWithForeign(): void
        {
            User::factory()
                ->count(2)
                ->has(
                    Contracts::factory(2)->has(
                        Holidays::factory(3)
                    )
                )
                ->create();

        }
    }

<?php

    namespace Holidays;

    use Tests\TestCase;
    use App\Models\Holidays;
    use Database\Seeders\UserSeeder;
    use App\DTO\Holidays\HolidaysWithDetailsDTO;

    class HolidaysShowTest extends TestCase
    {
        /**
         * A basic feature test example.
         */
        public function test_example(): void
        {
            $userSeeder = new UserSeeder();
            $userSeeder->run();
            $holiday = Holidays::find(1);
            $response = $this->get('/api/holidays/1');
            $response->assertStatus(200);
            $response->assertJsonStructure(
                [
                    'id',
                    'end_date',
                    'start_date',
                    'created_at',
                    'updated_at',
                    'contracts_id'
                ]
            );
            $holidayDataDB = HolidaysWithDetailsDTO::from($holiday);
            $holidayDataResponse = HolidaysWithDetailsDTO::from($response->getContent());
            $this->assertEquals($holidayDataResponse, $holidayDataDB);
        }
    }

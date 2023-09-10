<?php

namespace Tests\Feature\Holidays;

use App\Models\Holidays;
use Database\Seeders\UserSeeder;

use Tests\TestCase;

class HolidaysIndexTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $userSeeder = new UserSeeder();
        $userSeeder->run();

        $holidays = Holidays::all();

        $response = $this->get('/api/holidays');

        $response->assertStatus(200);


        $response->assertJsonStructure([
            '*'=>[
                'id',
                'end_date',
                'start_date',
                'created_at',
                'updated_at',
                'contracts_id'
            ]
        ]);


        foreach ($holidays as $holiday){
            $holidayData = [
                'id'              => $holiday['id'],
                'end_date'        => $holiday['end_date'],
                'start_date'      => $holiday['start_date'],
                'created_at'      => $holiday['created_at'],
                'updated_at'      => $holiday['updated_at'],
                'contracts_id'    => $holiday['contracts_id'],
            ];

            $response->assertJsonFragment($holidayData);
        }

    }
}

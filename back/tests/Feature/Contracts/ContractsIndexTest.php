<?php

namespace Tests\Feature\Contracts;

use App\Models\Contracts;
use Database\Seeders\ContractSeeder;

use Tests\TestCase;

class ContractsIndexTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $contractSeeder = new ContractSeeder();
        $contractSeeder->run();

        $contracts = Contracts::all();

        $response = $this->get('/api/contracts');

        $response->assertStatus(200);

        $response->assertJsonStructure([
            '*'=>[
                'position',
                'salary',
                'start_date',
                'end_date',
                'holidays_per_year',
                'created_at',
                'updated_at',
            ]
        ]);

        foreach ($contracts as $contract){
            $contractData = [
                'position'          => $contract['position'],
                'salary'            => $contract['salary'],
                'start_date'        => $contract['start_date'],
                'end_date'          => $contract['end_date'],
                'holidays_per_year' => $contract['holidays_per_year'],
                'created_at'        => $contract['created_at'],
                'updated_at'        => $contract['updated_at'],
            ];

            $response->assertJsonFragment($contractData);
        }
    }
}

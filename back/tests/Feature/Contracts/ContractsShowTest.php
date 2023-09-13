<?php

    namespace Contracts;

    use Tests\TestCase;
    use App\Models\Contracts;
    use Database\Seeders\ContractSeeder;
    use App\DTO\Contracts\ContractWithDetailsDTO;

    class ContractsShowTest extends TestCase
    {
        /**
         * A basic feature test example.
         */
        public function test_example(): void
        {
            $contractSeeder = new ContractSeeder();
            $contractSeeder->run();
            $contracts = Contracts::find(1);
            $response = $this->get('/api/contracts/1');
            $response->assertStatus(200);
            $response->assertJsonStructure(
                [
                    'id',
                    'position',
                    'salary',
                    'start_date',
                    'end_date',
                    'holidays_per_year',
                    'created_at',
                    'updated_at',
                ]
            );
            $contractData = ContractWithDetailsDTO::from($contracts);
            $contractDataResponse = ContractWithDetailsDTO::from($response->getContent());
            $this->assertEquals($contractData, $contractDataResponse);
        }
    }

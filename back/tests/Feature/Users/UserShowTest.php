<?php

    namespace Tests\Feature\Users;

    use Tests\TestCase;
    use App\Models\User;
    use Database\Seeders\UserSeeder;
    use App\DTO\Users\UserWithDetailsDTO;

    class UserShowTest extends TestCase
    {
        /**
         * A basic feature test example.
         */
        final public function test_example(): void
        {
            $user = UserSeeder::seedOneWithDetails();
            $userDate = User::with('contracts')->find($user['id']);
            $response = $this->get('/api/users/1');
            $response->assertStatus(200);
            $response->assertJsonStructure(
                [
                    'id',
                    'name',
                    'email',
                    'created_at',
                    'updated_at',
                ]
            );
            $userDataResponse = UserWithDetailsDTO::from($response->getContent());
            $userDataDB = UserWithDetailsDTO::from($userDate);
            $this->assertEquals($userDataResponse, $userDataDB);
        }
    }

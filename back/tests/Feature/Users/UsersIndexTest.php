<?php

    namespace Tests\Feature\Users;

    use App\DTO\Users\UserDTO;
    use App\Models\User;
    use Database\Seeders\UserSeeder;
    use Tests\TestCase;

    class UsersIndexTest extends TestCase
    {
        /**
         * A basic feature test example.
         */
        final public function test_example(): void
        {
            $userSeeder = new UserSeeder();
            $userSeeder->run();
            $users = User::all();
            $response = $this->getJson('/api/users');
            $response->assertStatus(200);
            $response->assertJsonStructure(
                [
                    '*' => [
                        'id',
                        'name',
                        'email',
                        'created_at',
                        'updated_at'
                    ]
                ]
            );
            foreach ($users as $user) {
                $userData = UserDTO::from($user)->toArray();
                $response->assertJsonFragment($userData);
            }
        }
    }

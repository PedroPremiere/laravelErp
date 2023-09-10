<?php

namespace Tests\Feature\Users;

use App\Models\User;
use Database\Seeders\UserSeeder;

use Tests\TestCase;

class UsersIndexTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $userSeeder = new UserSeeder();
        $userSeeder->run();

        $users = User::all();
        $response = $this->getJson('/api/users');

        $response->assertStatus(200);


        $response->assertJsonStructure([
                '*'=>[
                    'id',
                    'name',
                    'email',
                    'email_verified_at',
                    'created_at',
                    'updated_at'
                ]
        ]);

        foreach ($users as $user){
            $userData = [
                'id'                => $user['id'],
                'name'              => $user['name'],
                'email'             => $user['email'],
                'email_verified_at' => $user['email_verified_at'],
                'created_at'        => $user['created_at'],
                'updated_at'        => $user['updated_at'],
            ];

            $response->assertJsonFragment($userData);
        }
    }
}

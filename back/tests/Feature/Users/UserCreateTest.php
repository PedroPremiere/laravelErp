<?php

    namespace Tests\Feature\Users;

    use Tests\TestCase;
    use Illuminate\Foundation\Testing\WithFaker;

    class UserCreateTest extends TestCase
    {
        use WithFaker;

        /**
         *  Sends created when data correct
         */
        public function test_created_when_data_ok(): void
        {

            $password = $this->faker->name;
            $payload = [
                'name' => $this->faker->name,
                'email' => $this->faker->email,
                'password' => $password,
                'passwordConfirm' => $password
            ];
            $response = $this->post('/api/users', $payload);
            $response->assertStatus(201);
            $response->assertJsonStructure(
                [
                    'id',
                    'name',
                    'email',
                    'created_at',
                    'updated_at',
                ]
            );
        }

        /**
         *  Sends Bad Request when some data missing
         */
        public function test_bad_request_when_some_data_missing(): void
        {

            $payload = [
                'name' => 'ko2ko'
            ];
            $response = $this->post('/api/users', $payload);
            $response->assertStatus(400);
            $response->assertJsonStructure(
                [
                    'error' => [
                        'email',
                        'password',
                        'passwordConfirm'
                    ]
                ]
            );

        }

        /**
         *  Sends Bad Request when passwordConfirm is different then password
         */
        public function test_bad_request_when_password_confirm_wrong(): void
        {

            $payload = [
                'password' => 'ko2ko',
                'passwordConfirm' => 'ko3ko',
                'email' => 'email@example.com'
            ];
            $response = $this->post('/api/users', $payload);
            $response->assertStatus(400);
            $response->assertJsonStructure(
                [
                    'error' => [
                        'passwordConfirm'
                    ]
                ]
            );

        }

        /**
         * Sends Bad Request when no payload data
         */
        public function test_bad_request_when_no_data(): void
        {
            $payload = [
                //'name' => 'ko2ko'
            ];
            $response = $this->post('/api/users', $payload);
            $response->assertStatus(400);
            $response->assertJsonStructure(
                [
                    'error' => [
                        'name',
                        'email',
                        'password',
                        'passwordConfirm'
                    ]
                ]
            );

        }
    }

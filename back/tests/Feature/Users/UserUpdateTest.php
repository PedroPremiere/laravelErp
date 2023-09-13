<?php

    namespace Tests\Feature\Users;

    use Illuminate\Foundation\Testing\RefreshDatabase;
    use Illuminate\Foundation\Testing\WithFaker;
    use Tests\TestCase;

    class UserUpdateTest extends TestCase
    {
        /**
         * A basic feature test example.
         */
        public function test_example(): void
        {
            //todo implement
            $response = $this->get('/');
            $response->assertStatus(200);
        }
    }

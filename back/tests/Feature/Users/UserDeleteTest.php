<?php

    namespace Tests\Feature\Users;

    use Illuminate\Foundation\Testing\RefreshDatabase;
    use Illuminate\Foundation\Testing\WithFaker;
    use Tests\TestCase;

    class UserDeleteTest extends TestCase
    {
        /**
         * A basic feature test example.
         */
        public function test_example(): void
        {
            $response = $this->delete('/api/users/1');
            $response->assertStatus(200);
            //todo finish this
        }
    }

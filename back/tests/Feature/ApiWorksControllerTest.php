<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiWorksControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/api');

        $response->assertStatus(200);

        $responseContent =$response->getContent();

        $this->assertEquals('Api Works',$responseContent);
    }
}

<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

use Tests\Helpers\TruncateService;


abstract class TestCase extends BaseTestCase
{

    use CreatesApplication;

    public function setUp(): void
    {
        parent::setUp();

        TruncateService::truncate();
    }
}

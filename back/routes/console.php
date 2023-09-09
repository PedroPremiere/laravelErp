<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('testDB', function () {
    try {

        \DB::connection()->getPDO();
        $databaseName = \DB::connection()->getDatabaseName();
        echo("---------------Success-----------\n");
        echo("Connected to database: $databaseName");
    } catch (\Exception $e) {
        echo('---------------Error-----------');
        echo $e;
        echo('---------------DB doesnt work-----------');
    }
})->purpose('Testing if DB is connected');

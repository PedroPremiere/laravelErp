<?php

namespace App\Http\Controllers\Holidays;

use App\Models\Holidays;
use App\Http\Controllers\Controller;


class HolidaysIndexController extends Controller
{
    public function use(): string
    {
        $holidays = Holidays::all();

        return $holidays;
    }
}

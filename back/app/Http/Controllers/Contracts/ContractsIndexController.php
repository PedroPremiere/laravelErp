<?php

namespace App\Http\Controllers\Contracts;

use App\Models\Contracts;
use App\Http\Controllers\Controller;


class ContractsIndexController extends Controller
{
    public function use(): string
    {
        $contracts = Contracts::all();

        return $contracts;
    }
}

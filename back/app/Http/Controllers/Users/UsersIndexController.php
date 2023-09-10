<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;

class UsersIndexController extends Controller
{
    public function use(): string
    {
        $users = User::all();

        return $users;
    }
}

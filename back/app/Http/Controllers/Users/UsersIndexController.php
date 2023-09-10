<?php

namespace App\Http\Controllers\Users;

use App\DTO\UserDTO;
use App\Models\User;
use App\Http\Controllers\Controller;

class UsersIndexController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/users",
     *     @OA\Response(response="200", description="An example endpoint",
     *            @OA\JsonContent(
     *           @OA\Property(property="data",type="array",description="List of
     *                                                                       users",
     *    @OA\Items(ref="#/components/schemas/UserSchema"))
     *       )
     * ))
     */

    public function __invoke()
    {
        $users = UserDTO::collection(User::all());

        return $users;
    }
}

<?php

namespace App\Http\Controllers\Users;

use App\DTO\Users\UserDTO;
use App\Http\Controllers\Controller;
use App\Models\User;

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

<?php

    namespace App\Http\Controllers\Users;

    use App\DTO\Users\UserWithDetailsDTO;
    use App\Http\Controllers\Controller;
    use App\Models\User;

    class UserShowController extends Controller
    {
        public function __invoke(string $id): UserWithDetailsDTO
        {
            //todo add extra data
            $userDate = User::find($id);
            $user = UserWithDetailsDTO::from($userDate);

            return $user;
        }

    }


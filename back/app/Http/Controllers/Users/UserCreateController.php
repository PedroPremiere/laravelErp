<?php

    namespace App\Http\Controllers\Users;

    use App\Models\User;
    use Illuminate\Http\Request;
    use App\DTO\Users\UserCreateDTO;
    use App\Http\Controllers\Controller;
    use App\DTO\Users\UserWithDetailsDTO;

    class UserCreateController extends Controller
    {
        public function __invoke(Request $request)
        {
            $userData = UserCreateDTO::fromRequest($request);
            $createdUser = User::create($userData->toArray());

            return UserWithDetailsDTO::from($createdUser);
        }
    }

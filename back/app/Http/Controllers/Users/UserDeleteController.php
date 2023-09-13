<?php

    namespace App\Http\Controllers\Users;

    use App\DTO\Users\UserWithDetailsDTO;
    use App\Http\Controllers\Controller;
    use App\Models\User;
    use Illuminate\Http\Request;

    class UserDeleteController extends Controller
    {
        //todo finish this
        public function __invoke(string $id)
        {
            $user = User::find($id);
            if ($user) {
                $user->delete();
            }

            return '$user';
        }
    }

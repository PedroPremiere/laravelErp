<?php

    namespace App\Http\Controllers\Users;

    use App\Http\Controllers\Controller;
    use App\Models\User;
    use Illuminate\Http\Request;

    class UserUpdateController extends Controller
    {
        //
        public function __invoke(string $id)
        {
            //todo implement
            $user = User::find($id);
            if ($user) {
                //todo implement
                $user->update([]);
            }

            return '$user';
        }
    }

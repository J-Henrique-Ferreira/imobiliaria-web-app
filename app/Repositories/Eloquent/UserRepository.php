<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserRepository implements UserRepositoryInterface
{
    public function add(Request $request): User
    {
        $user = new User;
        $user->name = $request->name;
        $user->save();

        return $user;
    }

    public function find(string $email): user
    {
        $user = new User();
        $user = $user->get()->where("email", $email)[0];
        return $user;
    }

    public function destroy(User $user): bool
    {
        // destruir a sessao do usuario e não o registro de user
        return true;
    }
}

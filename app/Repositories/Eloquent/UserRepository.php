<?php

namespace App\Repositories\Eloquent;

use App\Http\Requests\Admin\City\CityStoreUpdateRequest;

use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $user = $user->find(["email" => $email]);

        return $user;
    }

    public function destroy(User $user): bool
    {
        // destruir a sessao do usuario e não o registro de user
        return true;
    }
}

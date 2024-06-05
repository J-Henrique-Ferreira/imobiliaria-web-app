<?php

namespace App\Repositories\Contracts;

use App\Models\User;
use Illuminate\Http\Request;

interface UserRepositoryInterface
{
    public function add(Request $request): User;

    public function find(string $email): User;

    public function destroy(User $user): bool;
}

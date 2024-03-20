<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class UserPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->type == 'admin' ? true : false;
    }

    public function view(User $user, User $model): bool
    {
        return false;
    }

    public function password(User $user): bool
    {
        return $user->id === Auth::user()->id ? true : false;
    }

    public function edit(User $user)
    {
        return $user->id === Auth::user()->id ? true : false;
    }

    public function show(User $user)
    {   
        return $user->id === Auth::user()->id || $user->type == 'admin' ? true : false;
    }

    public function update(User $user, User $model): bool
    {
        return false;
    }

    public function delete(User $user, User $model): bool
    {
        return $user->type == 'admin' ? true : false;
    }

    public function state(User $user): bool
    {
        return $user->type == 'admin' ? true : false;
    }
}

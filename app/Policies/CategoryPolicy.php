<?php

namespace App\Policies;

use App\Models\Category;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CategoryPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->type == 'admin' ? true: false;
    }

    public function store(User $user): bool
    {
        return $user->type == 'admin' ? true: false;
    }

    public function edit(User $user): bool
    {
        return $user->type == 'admin' ? true: false;
    }

    public function update(User $user): bool
    {
        return $user->type == 'admin' ? true: false;
    }

    public function delete(User $user): bool
    {
        return $user->type == 'admin' ? true: false;
    }

}

<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ProductPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->type == 'admin' || $user->type == 'seller' ? true: false;
    }

    public function store(User $user): bool
    {
        return $user->type == 'seller' ? true: false;
    }

    public function edit(User $user): bool
    {
        return $this->viewAny($user);
    }

    public function delete(User $user): bool
    {
        return $this->viewAny($user);
    }

    // public function update(User $user, Product $product): bool
    // {
    //     //
    // }

    // public function delete(User $user, Product $product): bool
    // {
    //     //
    // }

    // public function restore(User $user, Product $product): bool
    // {
    //     //
    // }

    // public function forceDelete(User $user, Product $product): bool
    // {
    //     //
    // }
}

<?php

namespace App\Policies;

use App\Models\CartLine;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CartLinePolicy
{
    public function viewAny(User $user): bool
    {
        return $user->type == 'admin' ? true : false;
    }

    public function view(User $user, CartLine $cartLine): bool
    {
        //
    }

    public function create(User $user): bool
    {
        //
    }

    public function update(User $user, CartLine $cartLine): bool
    {
        //
    }

    public function delete(User $user, CartLine $cartLine): bool
    {
        //
    }

    public function restore(User $user, CartLine $cartLine): bool
    {
        //
    }

    public function forceDelete(User $user, CartLine $cartLine): bool
    {
        //
    }
}

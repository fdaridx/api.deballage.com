<?php

namespace App\Policies;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CartPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->type == 'admin' ? true: false;
    }

}

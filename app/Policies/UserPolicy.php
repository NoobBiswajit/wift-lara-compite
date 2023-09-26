<?php

namespace App\Policies;

use App\Models\User;
// use App\Models\contact;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    public function viewUsers(User $user)
    {
        return $user->isAdmin();
    }
}

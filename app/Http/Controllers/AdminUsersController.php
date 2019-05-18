<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminUsersController extends Controller
{
    public function store(User $user)
    {
        $user->complete();

        return back();
    }

    public function destroy(User $user)
    {
        $user->incomplete();

        return back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', compact('user'));
    }

    //compact — crée un tableau à partir de variables et de leur valeur

    public function edit(User $user)
    {
        // abort_if($user->isNot(current_user()),404);
        //$this->authorize('edit', $user);
        // Or can be done in the routes file

        return view('profiles.edit', compact('user'));
    }
}

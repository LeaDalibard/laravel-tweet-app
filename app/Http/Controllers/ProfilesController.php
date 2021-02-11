<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

    public function update(User $user)
    {

        $attributes = request()->validate([
            'username' => [
                'string',
                'required',
                'max:255',
                'alpha-dash',
                Rule::unique('users')->ignore($user)],
            'name' => [
                'string',
                'required',
                'max:255'],
            'avatar' => [
                'file'
            ],

            'email' => [
                'string',
                'required',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user)],
            'password' => [
                'string',
                'required',
                'min:8',
                'max:255',
                'confirmed']
        ]);

        if (request('avatar')) {
            $attributes['avatar'] = request('avatar')->store('avatars');

        }

        //store return a path where the image is located and that's what we put in the DB
        $user->update($attributes);

        return redirect($user->path());
    }
}

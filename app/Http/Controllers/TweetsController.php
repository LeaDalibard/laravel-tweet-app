<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetsController extends Controller
{
    public function store()
    {
        $attributes = request()->validate(['body' => 'required|max:255']);

        Tweet::create(
            [
                'user_id' => Auth()->id(),
                'body' => $attributes['body']
            ]
        );

        return redirect('/home');
    }
}

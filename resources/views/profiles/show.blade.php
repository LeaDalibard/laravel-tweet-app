@extends('layouts.app')

@section('content')

    <header class="mb-6">
        <img src="{{url('/images/profile_banner.jpeg')}}"
             alt=""
             height="220px"
             class="rounded-3xl mb-2"

        >
        <div class="flex justify-between items-center">

            <div>
                <h2 class="font-bold text-2xl mb-0">{{$user->name}}</h2>
                <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
            </div>
            <div>
                <a href="" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white"> Edit Profile</a>
                <a href="" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white"> Follow-me !</a>
            </div>
        </div>
    </header>


    <hr>

    @include('_timeline',[
    'tweets'=>$user->tweets
])


@endsection

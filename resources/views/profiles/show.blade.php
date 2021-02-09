@extends('layouts.app')

@section('content')

    <header class="mb-6 relative">
        <img src="{{url('/images/profile_banner.jpeg')}}"
             alt=""
             height="220px"
             class="rounded-3xl mb-2"

        >
        <div class="flex justify-between items-center  mb-4">

            <div>
                <h2 class="font-bold text-2xl mb-0">{{$user->name}}</h2>
                <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
            </div>
            <div>
                <a href="" class=" rounded-full  border border-gray-300 py-2 px-4 text-black text-xs mr-2"> Edit
                    Profile</a>
                <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs"> Follow-me !</a>
            </div>
        </div>
        <p class="text-sm">
            Lorem isum dolor sit amet, consectetur adipisicing elit. Maiores, quaerat ratione. Commodi consequatur
            corporis culpa, distinctio doloribus eius et fuga harum libero maxime nihil placeat rerum tempora tenetur
            totam voluptas? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque blanditiis consectetur fugit
            iste quos?
        </p>

        <img src="{{$user->avatar}}"
             alt="avatar"
             class="rounded-full mr-2 absolute "
             style="width:160px; left:calc(50% - 75px); top:39%"
        >


    </header>


    <hr>

    @include('_timeline',[
    'tweets'=>$user->tweets
])


@endsection

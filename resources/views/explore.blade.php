<x-app>

    <div>

        @foreach($users as $user)
            <img src="{{$user->avatar}}"
                 alt="{{$user->username}}'s avatar"
                 width="60px"
            >
        @endforeach

    </div>

</x-app>

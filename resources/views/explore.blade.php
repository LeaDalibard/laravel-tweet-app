<x-app>

    <div>

        @foreach($users as $user)
            <a href="{{$user->path()}}" class="flex items-center mb-5">
                <img src="{{$user->avatar}}"
                     alt="{{$user->username}}'s avatar"
                     width="60px"
                     class="mr-4 rounded-xl"
                >
                <div>
                    <h4 class="font-weight-bold">{{'@'.$user->username}}</h4>
                </div>
            </a>

        @endforeach

        {{$users->links()}} //to show pagination
    </div>

</x-app>

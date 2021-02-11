<div class=" bg-blue-200 border border-blue-300 rounded-3xl px-6 py-4">
    <h3 class="font-bold text-xl mb-4">Following</h3>

    <ul>
        @forelse(current_user()->follows as $user)
            <li class="{{$loop->last ? '' : 'mb-4'}}">
                <a href="{{$user->path()}}" class="flex items-center text-sm mb-1">
                    <img src="{{$user->avatar}}"
                         alt="avatar"
                         class="rounded-full mr-2"
                         width="40"
                         height="40"
                    >
                    {{$user->name}}
                </a>
            </li>
        @empty
            <li>No friends yet!</li>
        @endforelse
    </ul>

</div>



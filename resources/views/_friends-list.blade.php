<h3 class="font-bold text-xl mb-4">Following</h3>

<ul>
    @foreach(auth()->user()->follows as $user)
    <li>
        <div class="flex items-center text-sm mb-1">
            <img src="{{$user->avatar}}">
           {{$user->name}}
        </div>
    </li>
    @endforeach
</ul>

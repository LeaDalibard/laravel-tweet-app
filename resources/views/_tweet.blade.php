<div class=" p-4 flex border-b border-b-gray-400">
    <div class="mr-2 flex-shrink-0">
        <img src="https://i.pravatar.cc/50"
             alt="avatar"
             class="rounded-full mr-2"
        >
    </div>
    <div>
        <h5 class="font-bold mb-4">{{$tweet->user->name}}</h5>
        <p class="text-sm">
            {{$tweet->body}}
        </p>
    </div>
</div>

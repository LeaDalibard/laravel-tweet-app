<x-app>

    <header class="mb-6 relative">

        <div class="relative">
            <img src="{{url('/images/profile_banner.jpeg')}}"
                 alt=""
                 height="220px"
                 class="rounded-3xl mb-2"
            >

            <img src="{{$user->avatar}}"
                 alt="avatar"
                 class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2 "
                 style="left:50%;"
                 width="150px"
            >
        </div>

        <div class="flex justify-between items-center  mb-6">

            <div style="max-width: 270px">
                <h2 class="font-bold text-2xl mb-0">{{$user->name}}</h2>
                <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
            </div>
            <div class="flex">
               <!-- at if(current_user()->is($user))-->
                @can('edit', $user)
                <a href="{{$user->path('edit')}}" class=" rounded-full  border border-gray-300 py-2 px-4 text-black text-xs mr-2">
                    Edit Profile
                </a>
              @endcan

               <x-follow-button :user="$user"></x-follow-button>
                <!-- Need to pass user info to follow-button component, les ":" spécifient qu'on passe un objet pas string-->

            </div>
        </div>
        <p class="text-sm">
            Lorem isum dolor sit amet, consectetur adipisicing elit. Maiores, quaerat ratione. Commodi consequatur
            corporis culpa, distinctio doloribus eius et fuga harum libero maxime nihil placeat rerum tempora tenetur
            totam voluptas? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque blanditiis consectetur fugit
            iste quos?
        </p>




    </header>




    @include('_timeline',[
    'tweets'=>$tweets
])



</x-app>

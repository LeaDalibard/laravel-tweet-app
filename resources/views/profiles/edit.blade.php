<x-app>
    <form method="POST" action="{{$user->path()}}">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="name"
            >
                Name
            </label>
            <input
                type="text"
                class="border border-gray-400 p-2 w-full"
                name="name"
                id="name"
                value="{{$user->name}}"
                required
            >
            @error('name')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

        </div>
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="username"
            >
                Username
            </label>
            <input
                type="text"
                class="border border-gray-400 p-2 w-full"
                name="username"
                id="username"
                value="{{$user->username}}"
                required
            >
            @error('username')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

        </div>
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="email"
            >
                Email
            </label>
            <input
                type="email"
                class="border border-gray-400 p-2 w-full"
                name="email"
                value="{{$user->email}}"
                id="email"
                required
            >

        </div>
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="password"
            >
                Password
            </label>
            <input
                type="password"
                class="border border-gray-400 p-2 w-full"
                name="password"
                id="password"
            >
        </div>
        <div class="mb-6">
            <labe class="block mb-2 uppercase font-bold text-xs text-gray-700"
                  for="password_confirmation"
            >
                Password Confirmation
                </label>
                <input
                    type="password"
                    class="border border-gray-400 p-2 w-full"
                    name="password_confirmation"
                    id="password_confirmation"
                    required
                >
                @error('password_confirmation')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button type="submit"
                    class="bg-blue-400 text-white rounded py-2 px-4 hover-bg-blue-500">
                Submit
            </button>
        </div>


    </form>
</x-app>

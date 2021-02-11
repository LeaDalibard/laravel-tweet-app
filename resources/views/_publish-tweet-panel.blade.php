<div class="border border-blue-400 rounded-lg py-6 px-8 mb-8">

    <form method="POST" action="/tweets">
        @csrf
        <textarea
            name="body"
            class="w-full text-grey-darkest bg-transparent "
            placeholder="What's up?"
            required
            autofocus
        ></textarea>


        <hr class="my-4">
        <footer class="flex justify-between items-center">
            <img src="{{auth()->user()->avatar}}"
                 alt="avatar"
                 class="rounded-full mr-2"
                 width="50"
                 height="50"
            >
            <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 rounded-full shadow px-10 h-10 text-white"
            >
               Publish
            </button>
        </footer>
    </form>

    @error('body')
    <p class="text-red-500 text-sm mt-2">
        {{$message}}
    </p>
    @enderror
</div>

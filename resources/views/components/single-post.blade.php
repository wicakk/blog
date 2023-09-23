<div class="shadow-xl py-6 px-4 rounded-lg bg-white hover:bg-gray-100">
    <div class="relative">
        <object data="{{ $post->banner_url }}" class="w-full rounded-lg">
            <img class="object-cover object-center w-full h-full rounded-lg lg:h-80" src="/images/404-image.jpg"
                alt="{{ $post->title }}">
        </object>

        <div class="absolute bottom-0 flex p-3 bg-white dark:bg-gray-900 rounded-tr-lg">
            <img class="object-cover object-center w-10 h-10 rounded-full"src="{{ $post->author->photo_url }}"
                alt="{{ $post->author->name }}">

            <div class="mx-4">
                <h1 class="text-sm text-gray-700 dark:text-gray-200">
                    {{ $post->author->name }}
                </h1>
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    {{ $post->created_at->diffForHumans() }}
                </p>
            </div>
        </div>
    </div>

    <span class="flex items-center justify-between">
        <h1 class="mt-4 text-xl font-semibold text-gray-800 dark:text-white">
            {{ $post->title }}
        </h1>
        
        <span class="px-4 mt-4 py-1 rounded-full bg-blue-600/20 text-blue-500 text-sm">{{ $post->category->name }}</span>
    </span>
    <hr class="w-32 my-2 text-blue-500">

    <p class="text-sm text-gray-500 dark:text-gray-400 line-clamp-3 mt-2">
        {{ $post->excerpt }}
    </p>

    <a href="{{ route('posts.show', $post->slug) }}"
        class="inline-block mt-4 w-full text-center py-1 rounded text-white bg-primary-700 hover:text-blue-400">Read
        more</a>
</div>

<hr class="mt-2">
<div class="py-1 mt-1 -mx-3 overflow-y-auto whitespace-nowrap scroll-hidden">
    <span class="font-semibold">
        Catagori : 
    </span>
    @forelse ($categories as $cat)
        <a class="mx-4 bg-white rounded shadow px-4 py-1 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 hover:font-semibold dark:hover:text-blue-400  md:my-0"
            href="/posts?category={{ $cat->slug }}">{{ $cat->name }}</a>
    @empty
        <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:my-0"
            href="#">No Category</a>
    @endforelse
</div>

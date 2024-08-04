<div class="flex flex-col items-center gap-y-2">
    <section class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
        @foreach ($posts as $post)
            <a href="{{ route('posts.view', ['slug' => $post->slug]) }}">
                <img class="h-auto max-w-full rounded-lg" src="{{ 'storage/' . $post->banner }}" alt="">
                <div class="p-3 flex flex-col gap-y-2">
                    <div>
                        {{-- @foreach ($post->categories as $category)
                            <span
                                class="text-white bg-gray-900 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full">
                                {{ $category->name }}
                            </span>
                        @endforeach --}}
                    </div>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ $post->title }}
                    </h5>
                    <x-markdown class="text-gray-700 dark:text-gray-400 prose">
                        {!! \Str::limit($post->article, 75) !!}
                    </x-markdown>
                    <div class="flex gap-x-2 items-center pt-4">
                        <x-filament::avatar size="w-8 h-8" src="{{ $post->user->getAvatarUrl() }}"
                            alt="{{ $post->user->name }}" />
                        <div class="grid">
                            <span>{{ $post->user->name }}</span>
                            <span class="text-xs">{{ $post->formattedDate() }}</span>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </section>
    <div class="mt-4">
        {{ $posts->links() }}
    </div>
    <button type="button"
        class="flex items-center justify-center py-2 px-4 text-sm font-medium text-center text-white rounded-lg bg-[#070F2B] hover:bg-[#070F2B] focus:ring-4 focus:ring-[#070F2B] mt-8">
        Read More
        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 5h12m0 0L9 1m4 4L9 9" />
        </svg>
    </button>
</div>

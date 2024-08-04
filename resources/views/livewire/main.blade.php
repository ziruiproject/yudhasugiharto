<section>
    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
            <h1 class="mb-6 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">
                Yudha's Developer Diary
            </h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48">
                My Dedicated Space for Documenting Progress, Sharing Life Lessons, and Spreading Valuable Knowledge
            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="#read"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-[#070F2B] hover:bg-[#070F2B] focus:ring-4 focus:ring-[#070F2B]">
                    Read My Journey
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                <a href="{{ route('about') }}"
                    class="py-3 px-5 sm:ms-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-[#070F2B] focus:z-10 focus:ring-4 focus:ring-gray-100">
                    About Me
                </a>
            </div>
        </div>
    </section>
    {{-- POST LIST --}}
    <section class="md:m-16 m-8 flex flex-col gap-y-8" id="read">
        <h3 class="font-bold text-3xl">
            Ready to Learn?
        </h3>
        {{-- SEARCH AREA --}}
        <form class="max-w-md" wire:submit='search'>
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search" wire:model.live='search'
                    class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-[#070F2B] focus:border-[#070F2B]"
                    placeholder="Search Articles or Projects" required />
                <button type="submit"
                    class="text-white absolute end-2.5 bottom-2.5 bg-[#070F2B] hover:bg-[#070F2B] focus:ring-4 focus:outline-none focus:ring-[#070F2B] font-medium rounded-lg text-sm px-4 py-2">Search</button>
            </div>
        </form>
        {{-- FILTER BY CATEGORY --}}
        @livewire('post-filter')
        {{-- POSTS CARD LIST --}}
        <div class="flex flex-col items-center gap-y-2">
            <section class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
                @foreach ($posts as $post)
                    <a href="{{ route('posts.view', ['slug' => $post->slug]) }}">
                        <img class="h-auto max-w-full rounded-lg" src="{{ 'storage/' . $post->banner }}" alt="">
                        <div class="p-4 flex flex-col gap-y-1">
                            {{-- <div class="flex flex-wrap gap-y-2">
                                @foreach ($post->categories->sortBy('name') as $category)
                                    <span
                                        class="text-gray-900 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-[#070F2B] focus:z-10 focus:ring-4 focus:ring-gray-100 focus:bg-gray-100">
                                        {{ $category->name }}
                                    </span>
                                @endforeach
                            </div> --}}
                            <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
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
            {{ $posts->links('vendor.pagination.tailwind') }}
        </div>
    </section>
</section>

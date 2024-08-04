@section('title')
    {{ $post->title }}
@endsection
<section class="flex flex-col">
    <div class="flex flex-col post-header items-center justify-center item py-32 text-white gap-y-6" id="head-banner">
        <h1 class="lg:text-5xl text-4xl font-bold text-center">{{ $post->title }}</h1>
        <div class="text-sm text-gray-300">
            <span>{{ $post->formattedDate() . ($post->isUpdated() ? ' (updated)' : '') }} - </span>
            <span>{{ $readDuration }}</span>
        </div>
        <div class="flex gap-x-2 items-center pt-4">
            <x-filament::avatar size="w-8 h-8" src="{{ $post->user->getAvatarUrl() }}" alt="{{ $post->user->name }}" />
            <span>{{ $post->user->name }}</span>
        </div>
        @if ($post->path)
            <a class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white rounded-lg bg-[#070F2B] hover:bg-[#070F2B] focus:ring-4 focus:ring-[#070F2B]"
                href="{{ asset('storage/' . $post->path) }}" download="{{ $post->slug . '-attachments' }}">
                Download Attachments
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-4 ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                </svg>
            </a>
        @endif
    </div>
    <x-markdown class="prose-base prose-h3:text-3xl prose-h3:font-bold px-8 lg:mx-96 py-4 lg:py-16">
        {!! $post->article !!}
    </x-markdown>
</section>

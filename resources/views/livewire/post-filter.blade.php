<div>
    <button type="button" wire:click='clearFilter()'
        class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-[#070F2B] focus:z-10 focus:ring-4 focus:ring-gray-100 focus:bg-gray-100">
        All Categories
    </button>
    @foreach ($categories as $category)
        <button type="button" wire:click='selectCategory({{ $category->id }})'
            class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-[#070F2B] focus:z-10 focus:ring-4 focus:ring-gray-100 focus:bg-gray-100">
            {{ $category->name }}
            <span
                class="inline-flex items-center justify-center w-4 h-4 ms-2 text-xs font-semibold text-white bg-gray-900 rounded-full">
                {{ $category->posts_count }}
            </span>
        </button>
    @endforeach
</div>

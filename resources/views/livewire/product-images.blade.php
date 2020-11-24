<div>
    <div class="">
        <img src="{{ asset('storage/'.$cover) }}" class="w-full h-96 object-contain">
    </div>
    <div class="flex flex-wrap justify-center bg-gray-100">
        <div class="w-1/5 p-2">
            <img wire:click="$set('cover','{{ $default_cover }}')" src="{{ asset('storage/'.$default_cover) }}"
                class="w-full h-24 object-cover rounded-lg border-2 cursor-pointer">
        </div>
        @foreach ($product_images as $image)
        <div class="w-1/5 p-2">
            <img wire:click="$set('cover','{{ $image->image }}')" src="{{ asset('storage/'.$image->image) }}"
                class="w-full h-24 object-cover rounded-lg border-2 cursor-pointer">
        </div>
        @endforeach
    </div>
</div>
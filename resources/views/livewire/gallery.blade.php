<div class="container mx-auto mt-10">
    <div class="text-4xl text-red-600 text-center open-sans border-b border-gray-200 mb-10">
        Galleries
    </div>
    <div class="mt-10 flex flex-wrap justify-center">
        @foreach ($galleries as $gallery)
        <a href="{{ route('gallery.show',['id' => $gallery->id]) }}" class="w-full md:w-1/3 p-3">
            <img src="{{ asset('storage/'.$gallery->cover_image) }}" class="w-full h-auto md:h-72 object-cover">
            <div class="text-gray-600">{{ $gallery->name }}</div>
        </a>
        @endforeach
    </div>

</div>
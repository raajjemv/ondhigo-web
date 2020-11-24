<div class="container mx-auto">
    <div class="flex flex-wrap">
        @foreach ($products as $product)
        <a href="{{ route('product.show',['slug' => $product->slug,'id' => $product->id]) }}"
            class="w-1/2 md:w-1/4 p-5 outline-none group">
            <div class="p-2 rounded-lg group-hover:bg-red-700">
                <img src="{{ asset('storage/'.$product->image) }}" class="rounded w-full h-72 object-cover">
                <div class="text-gray-700 group-hover:text-white">{{ $product->name }}</div>
                <div class="flex justify-between items-center">
                    <div class="text-sm text-red-700 group-hover:text-white font-bold josefin-sans ">MVR
                        {{ $product->price }}</div>
                    <img src="{{ asset('storage/'.$product->brand->logo) }}" class="w-10 h-10 rounded-lg ">
                </div>
            </div>
        </a>
        @endforeach
    </div>
    <div class="mt-5 pt-5 border-t border-gray-200 ">
        {{ $products->links() }}
    </div>
</div>
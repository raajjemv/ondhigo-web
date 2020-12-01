<div class="container mx-auto my-10 px-3 md:px-0">
    <div class="bg-gray-100 rounded p-3 text-gray-600 mb-10 flex justify-between items-center">
        <div>
            Products > <span class="font-semibold">view all</span>
        </div>
        <div>
            <div class="relative text-gray-600 ">
                <input type="search" name="search" placeholder="Search"
                    class="bg-white h-10 px-5 pr-10 rounded-full text-sm focus:outline-none" wire:model="search">
                <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                    <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                        viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                        xml:space="preserve" width="512px" height="512px">
                        <path
                            d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap">
        <div class="w-full md:w-1/5 mt-2">
            <div class="bg-white shadow">
                <div class="p-2 bg-gray-100 rounded text-red-600 font-semibold">Brands</div>
                <div class="pl-2 md:pl-3 py-3">
                    @foreach($products->groupBy('brand_id') as $product)
                    <div class="mb-1">
                        <a class="text-gray-500 hover:text-red-600 cursor-pointer">-
                            {{ $product[0]['brand']['name'] }}</a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="bg-white shadow mt-5">
                <div class="p-2 bg-gray-100 rounded text-red-600 font-semibold">Categories</div>
                <div class="pl-2 md:pl-3 py-3">
                    @foreach($products->groupBy('category_id') as $product)
                    <div class="mb-1">
                        <a class="text-gray-500 hover:text-red-600 cursor-pointer">-
                            {{ $product[0]['category']['name'] }}</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="flex-1">
            <div class="flex flex-wrap">
                @foreach ($products as $product)
                <a href="{{ route('product.show',['slug' => $product->slug,'id' => $product->id]) }}"
                    class="w-1/2 md:w-1/4 px-2 outline-none group mb-10">
                    <div class="p-2 rounded-lg group-hover:bg-gray-100">
                        <img src="{{ asset('storage/'.$product->image) }}" class="rounded w-full h-72 object-cover">
                        <div class="text-gray-700">{{ $product->name }}</div>
                        <div class="flex justify-between items-center">
                            <div class="text-sm text-red-700 group-hover:text-gray-700 font-bold josefin-sans ">MVR
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
    </div>
</div>
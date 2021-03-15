<div class="container mx-auto my-10 px-3 md:px-0">
    <div class="bg-gray-100 rounded p-3 text-gray-600 mb-10 flex justify-between items-center">
        <div>
            Products > <span class="font-semibold">view all</span>
        </div>
        <div>
            <div class="relative text-gray-600 ">
                <input type="search" name="search" placeholder="Search" autocomplete="off"
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

    <div class="space-y-4">
        @foreach ($brands as $product_brands)
        <div style="background-color: #D9D9D9" class=" rounded-xl p-4">
            <div class="">
                <img src="{{ asset('storage/'.$product_brands->logo) }}" alt="{{ $product_brands->name }}"
                    class="w-20 h-10 rounded-lg object-cover">
            </div>
            <div class="flex flex-wrap my-10">
                @php
                $products = $brand ? $product_brands->products : $product_brands->products->take(6);
                @endphp
                @foreach ($products as $product)
                <a class="text-center w-1/2 lg:w-1/6 hover:bg-gray-100 rounded-lg"
                    href="{{ route('product.show',['slug' => $product->slug,'id' => $product->id]) }}">
                    <img src="{{ asset('storage/'.$product->image) }}" class="w-48 rounded-lg">
                    <div class="text-sm uppercase  text-gray-700">{{ $product->name }}</div>
                </a>
                @endforeach
            </div>
            <div class="text-right">
                @if ($brand)
                <button wire:click="$set('brand','')"
                    class=" text-sm uppercase border border-gray-700 px-2 py-1 rounded bg-gray-100">clear</button>
                @else
                <button wire:click="$set('brand',{{ $product_brands->id }})"
                    class=" text-sm uppercase border border-gray-700 px-2 py-1 rounded bg-gray-100">view
                    all</button>
                @endif

            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
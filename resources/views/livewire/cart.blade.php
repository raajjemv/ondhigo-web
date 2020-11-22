<div class="container mx-auto p-2 my-10">
    <div class="mb-10 px-2 text-2xl py-3 text-gray-700 border-b border-gray-200">
        <i class="fas fa-shopping-cart"></i> Your Cart
    </div>
    <div class="flex flex-wrap">
        <div class="w-full md:w-1/2 mx-auto px-2">
            @forelse(collect($cart_items) as $index => $item)
            <div wire:transition.slide
                class="text-gray-700 flex items-center border bg-gray-200 mb-2 rounded-l-lg overflow-hidden">
                <img src="{{ asset('storage/'.$item->image ) }}" class="w-24" />
                <div class="flex flex-1 pl-0 md:pl-3">
                    <div class="flex-1">
                        <div class="p-3 text-base md:text-xl leading-snug">{{ $item->name }}</div>
                        <div class="p-3 text-sm">
                            MVR {{ number_format($item->price,2) }}
                            {{-- - QTY {{ $item->count() }} --}}
                        </div>
                    </div>
                    <div class="p-3">
                        <button
                            class=" p-3 rounded shadow-lg text-gray-700 bg-gray-300 hover:bg-gray-400 hover:text-white"
                            wire:click="removeItem({{ $index }})">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
            @empty
            <div class="p-3">
                <div class="text-xl text-gray-700">Your cart is empty!</div>
            </div>
            @endforelse
        </div>
        <div class="w-full md:w-1/2 px-2">
            <div class="p-3 md:p-10 bg-gray-200">
                <div class="flex items-center">
                    <div class=" font-semibold text-gray-700">TOTAL </div>
                    <div class="text-4xl text-gray-700 font-semibold pl-3 pr-1 josef">
                        @php
                        $total = collect($cart_items)->map(function($item){
                        return $item->price;
                        });
                        echo number_format($total->sum(),2);
                        @endphp
                    </div>
                    <div class="text-sm text-gray-700">MVR</div>
                </div>
                <div class="mt-3 text-sm text-gray-700">No of Items: {{ collect($cart_items)->count() }}</div>
                <div class="mt-10 p-2 rounded-lg bg-gray-700">
                    <livewire:place-order total="{{ $total->sum() }}" />
                </div>
            </div>
        </div>
    </div>
</div>
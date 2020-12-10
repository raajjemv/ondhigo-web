<div class="container mx-auto p-2 my-10 relative">
    <div class="mb-10 px-2 text-2xl py-3 text-gray-700 border-b border-gray-200">
        <i class="fas fa-shopping-cart"></i> Your Cart
    </div>
    <div class="flex flex-wrap">
        <div class="w-full md:w-2/3 px-2">

            <table class="w-full ">
                <thead class="bg-gray-100 text-left text-gray-500 font-light">
                    <tr>
                        <th class="p-2 font-light">#</th>
                        <th class="p-2 font-light">Name</th>
                        <th class="p-2 font-light">Qty</th>
                        <th class="p-2 font-light">Price</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse(collect($cart_items)->groupBy('id') as $index => $item)
                    <tr class="border-b border-gray-200 py-3 text-gray-500">
                        <td class="p-2">
                            <div>
                                <img src="{{ asset('storage/'.$item[0]['image'] ) }}"
                                    class="w-16 h-16 object-cover rounded-lg" />
                                <span class="text-sm text-gray-500">{{ $item[0]['brand']['name'] }}</span>
                            </div>
                        </td>
                        <td class="flex-1 p-2 text-gray-600 font-normal">{{ $item[0]['name'] }}</td>
                        <td class="flex-1 p-2">
                            <a class="text-blue-500"
                                href="{{ route('product.show',['slug' => $item[0]['slug'], 'id'=> $item[0]['id']]) }}">{{ $item->count() }}
                            </a>
                        </td>
                        <td class="p-2">{{ $item[0]['price'] }}</td>
                    </tr>
                    @empty
                </tbody>
                <div class="p-3">
                    <div class="text-xl text-gray-700">Your cart is empty!</div>
                </div>
                @endforelse
            </table>
        </div>
        <div class="w-full md:w-1/3 mt-5 md:mt-0">
            <div class="px-3 border-b">
                <div class="text-gray-600">Total: </div>
                <div class="josefin-sans text-4xl text-red-600">
                    {{  $total }}
                </div>
            </div>
            <div class="mt-4">
                <button class="p-3 w-full text-center bg-green-500 text-white rounded" wire:click="$set('show','1')">
                    <i class="fas fa-file-invoice-dollar"></i> REQUEST FOR A QUOTATION
                </button>
            </div>
        </div>
    </div>
    <x-modal size="w-full md:w-1/2" visible="{{ $show }}">
        @livewire('quotation-request')
    </x-modal>
    {{-- <livewire:modal size="max-w-xs" /> --}}
</div>
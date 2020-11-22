<div>

    <div class="flex flex-wrap rounded overflow-hidden items-center">
        <span class="px-2 text-sm">QTY</span>
        <input type="text" class="rounded-l w-16 text-center border border-r-0 p-3" wire:model="quantity" name=""
            {{ $product->quantity == 0 ? 'disabled' : '' }}>
        @if($product->quantity == 0)
        <button class="flex-1 bg-red-500 text-xl p-3 w-full text-center text-white opacity-50 cursor-not-allowed">
            <i class="fas fa-shopping-cart"></i> OUT OF STOCK
        </button>
        @else
        <button class="bg-green-400 rounded-r text-white  border p-3" wire:click="addToCart">
            <i class="fas fa-shopping-cart"></i> ADD TO CART
        </button>
        @endif
    </div>
    {{-- {{ session('message') }} --}}
    <livewire:modal-alert size="max-w-xs" />

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
			@this.on('itemAdded', () => {

				// alert('Item(s) added!')
				
			})
		})
    </script>
    @endpush
</div>
<a href="{{ route('cart.index') }}" class=" hover:text-gray-400 relative ">
    <i class="fas fa-shopping-cart"></i>
    <span
        class="absolute text-sm right-0 top-0 bg-red-500 text-white w-5 h-5 rounded-full inline-block flex items-center justify-center -mr-3 -mt-3">{{ $cartSum }}</span>
</a>
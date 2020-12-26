{{-- <nav class="menu relative z-20 block lg:flex items-center justify-center flex-wrap p-4"
    style="background: {{ Route::current()->uri == '/' ? 'linear-gradient(to bottom,gray,rgba(255, 0, 0, 0))' : 'rgba(31, 41, 55, 1)' }}">
--}}
<nav class="menu relative z-20 block lg:flex items-center justify-center flex-wrap p-4"
    style="background: {{ Route::current()->uri == '/' ? 'rgba(31, 41, 55, 1)' : 'rgba(31, 41, 55, 1)' }}">
    <div class="">
        <div class="block lg:hidden">
            <div class="flex justify-between">
                <img src="{{ asset('images/logo.png') }}" class="w-24 h-12 object-cover">
                <button wire:click="$toggle('show')"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-expanded="false">
                    <span class="sr-only">Open main menu</span>

                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="@if($show) block @else hidden @endif  block  lg:flex lg:items-center lg:w-auto">
            <a href="{{ route('index') }}"
                class="block mt-4 lg:inline-block lg:mt-0 text-shadow hover:text-red-600 text-white mr-4">
                HOME
            </a>
            <a href="{{ route('about') }}" }}
                class="block mt-4 lg:inline-block lg:mt-0 text-shadow hover:text-red-600 text-white mr-4">
                ABOUT
            </a>
            <a href="{{ route('product.index') }}"
                class="block mt-4 lg:inline-block lg:mt-0 text-shadow hover:text-red-600 text-white mr-4">
                PRODUCTS
            </a>
            <a href="{{ route('events') }}"
                class="block mt-4 lg:inline-block lg:mt-0 text-shadow hover:text-red-600 text-white mr-4">
                EVENTS
            </a>
        </div>
    </div>
    <div class="hidden lg:block">
        <img src="{{ asset('images/logo.png') }}" class="w-24">
    </div>
    <div class="@if($show) block @else hidden @endif  block  lg:flex lg:items-center lg:w-auto">
        <a href="{{ route('galleries') }}"
            class="block mt-4 lg:inline-block lg:mt-0 text-shadow hover:text-red-600 text-white ml-0 lg:ml-4 mr-4">
            PHOTO GALLERY
        </a>
        <a href="{{ route('outlets') }}"
            class="block mt-4 lg:inline-block lg:mt-0 text-shadow hover:text-red-600 text-white mr-4">
            OUTLETS
        </a>
        <a href="{{ route('contact') }}"
            class="block mt-4 lg:inline-block lg:mt-0 text-shadow hover:text-red-600 text-white mr-4">
            CONTACT US
        </a>
    </div>
    <div class="mt-4 lg:mt-0 @if($show) block @else hidden @endif  block  lg:flex lg:items-center lg:w-auto">
        <livewire:menu-cart-icon />
    </div>
</nav>
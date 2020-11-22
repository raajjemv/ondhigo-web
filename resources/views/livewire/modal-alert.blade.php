<div
    class="{{ $visible ? 'block' : 'hidden' }} z-20 bg-semi-75 fixed top-0 left-0 h-screen w-full flex flex-col items-center justify-center bg-teal-lightest font-sans">
    <div class="h-screen w-full absolute flex items-center justify-center bg-modal">
        <div class="relative">
            <button wire:click="$toggle('visible')"
                class="absolute top-0 right-0 p-1 w-7 h-6 rounded-full flex items-center justify-center bg-black text-white">
                <i class="fas fa-times"></i>
            </button>
            <div
                class="{{ $bgColor }} text-white font-semibold leading-snug rounded shadow p-8 m-4 {{ $size }} max-h-full text-center overflow-y-scroll">
                {{ $message }}
            </div>
        </div>
    </div>
</div>
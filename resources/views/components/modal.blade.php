<div
    class="{{ $visible ? 'block' : 'hidden' }} z-20 bg-semi-75 fixed top-0 left-0 h-screen w-full flex flex-col items-center justify-center bg-teal-lightest font-sans">
    <div class="h-screen w-full absolute flex items-center justify-center bg-modal">
        <div class="relative">
            <div
                class="bg-white rounded shadow p-8 m-4 {{ $size }} max-h-full text-center overflow-y-scroll leading-snug">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
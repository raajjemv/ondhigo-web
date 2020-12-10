<div
    class="{{ $visible ? 'block' : 'hidden' }} z-20 bg-semi-75 fixed top-0 left-0 h-screen w-full flex flex-col items-center justify-center bg-teal-lightest font-sans">
    <div class="h-screen w-full absolute flex items-center justify-center bg-modal">
        <div class="relative {{ $size }}">
            <div class="flex flex-row-reverse pr-5">
                <button wire:click="$set('show',0)"
                    class="bg-red-600 text-white rounded-full w-6 h-6 flex items-center justify-center"><i
                        class="fas fa-times"></i></button>
            </div>
            <div class="bg-white rounded shadow p-8 m-4  max-h-full  overflow-y-scroll leading-snug">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
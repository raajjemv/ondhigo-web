<div class="px-2 md:px-0">
    <div class="bg-gray-200">
        <div class="container mx-auto pt-20 pb-3">
            <div class="text-3xl text-gray-600 border-b border-gray-200 pb-2">
                <i class="fas fa-envelope-open"></i> Contact Us
            </div>
        </div>
    </div>
    <div class="container mx-auto mt-5">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/2 my-5">
                <form wire:submit.prevent="submit" class="bg-white shadow p-3">
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-2"
                                for="grid-first-name">
                                First Name
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-50 text-gray-500 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="grid-first-name" type="text" placeholder="First Name" wire:model="first_name">
                            @error('first_name') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-2"
                                for="grid-last-name">
                                Last Name
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-50 text-gray-500 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" type="text" placeholder="Last Name" wire:model="last_name">
                            @error('last_name') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-2"
                                for="grid-password">
                                E-mail
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-50 text-gray-500 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="email" type="email" placeholder="Email" wire:model="email">
                            @error('email') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-2"
                                for="grid-password">
                                Message
                            </label>
                            <textarea
                                class=" no-resize appearance-none block w-full bg-gray-50 text-gray-500 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none"
                                id="message" wire:model="message"></textarea>
                            @error('message') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="md:flex md:items-center">
                        <div class="md:w-1/3">
                            <button
                                class="shadow bg-red-600 hover:bg-red-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                type="submit">
                                Send
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="w-full md:w-1/2 mt-10 md:mt-0 flex items-center justify-center">
                <div>
                    <div class="flex mb-3">
                        <span class="text-red-600"><i class="fas fa-map-marker"></i></span>
                        <span class="text-gray-500 pl-2 ">Ondhigo Pvt. Ltd<br>
                            M.Reef villa, Block 266, Muiveyo Magu,<br>
                            20-266, Male’<br>
                            Maldives.
                        </span>
                    </div>
                    <div class="mb-3">
                        <span class="text-red-600"><i class="fas fa-phone"></i></span>
                        <span class="text-gray-500 pl-1">+960 333 9898</span>
                    </div>
                    <div>
                        <span class="text-red-600"><i class="fas fa-at"></i></span>
                        <span class="text-gray-500 pl-2">sales@ondhigo.com</span>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
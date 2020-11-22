<div>
    <div class="mt-5">
        <label class="font-semibold block mb-2 text-white" for="contact_number">Contact Number <span
                class="text-red-500">*</span></label>
        <input type="text" wire:model="contact_number"
            class="rounded border w-full h-12 px-2 text-gray-500 focus:outline-none focus:shadow-outline"
            placeholder="eg: 7771234">
        @error('contact_number') <span class="mt-1 text-red-500">{{ $message }}</span> @enderror
    </div>
    <div class="mt-5">
        <label class="font-semibold block mb-2 text-white" for="address">Address <span class="text-red-500">*</span>
        </label>
        <input type="text" wire:model="address"
            class="rounded border w-full h-12 px-2 text-gray-500 focus:outline-none focus:shadow-outline"
            placeholder="eg: H.gulaabeege, Male'">
        @error('address') <span class="mt-1 text-red-500">{{ $message }}</span> @enderror
    </div>
    <div class="mt-5">
        <label class="font-semibold block mb-2 text-white leading-snug" for="additional_notes">Additional
            Notes</label>
        <textarea wire:model="additional_notes" cols="30" rows="5"
            class="p-2 border rounded w-full text-gray-500 focus:outline-none focus:shadow-outline"
            placeholder="special instructions"></textarea>

    </div>
    <button wire:click="submit" class="bg-green-500 hover:bg-green-400 text-white p-3 rounded text-2xl mt-3 w-full">
        <i class="fas fa-sign-out-alt"></i> Proceed
    </button>
</div>
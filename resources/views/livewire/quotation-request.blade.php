<div>
    <form wire:submit.prevent="submit">
        <div>
            <div class="my-4">
                <label for="customer_name" class="text-gray-500">Customer Name</label>
                <input wire:model="customer_name" type="text" class="border rounded p-2 text-gray-600 w-full mt-2">
                @error('customer_name') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="my-4">
                <label for="email" class="text-gray-500">Email</label>
                <input wire:model="email" type="email" class="border rounded p-2 text-gray-600 w-full mt-2">
                @error('email') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="my-4">
                <label for="contact_number" class="text-gray-500">Contact Number</label>
                <input wire:model="contact_number" type="text" class="border rounded p-2 text-gray-600 w-full mt-2"
                    placeholder="eg: +9607775544">
                @error('contact_number') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="my-4">
                <label for="notes" class="text-gray-500">Notes</label>
                <textarea wire:model="notes" id="" cols="30" rows="10"
                    class="border rounded p-2 text-gray-600 w-full mt-2"></textarea>
            </div>
            <button class="p-3 bg-green-500 text-white rounded" type="submit"><i class="fas fa-paper-plane"></i>
                Submit</button>
        </div>
    </form>
</div>
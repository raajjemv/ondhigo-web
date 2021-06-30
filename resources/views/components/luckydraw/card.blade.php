@props(['label','description'])
<div class="border rounded-lg bg-gray-50 mb-10 overflow-hidden">
     <div class="p-3 bg-red-600 text-white flex items-center">
          <span
               class="border-4 bg-green-100 border-gray-300 text-black uppercase font-semibold rounded-full w-20 h-20 flex items-center justify-center">
               {{ $label }}</span>
          <span class="mx-3 font-semibold">{{ $description }}</span>
     </div>
     <div>
          {{ $slot }}
     </div>
</div>
<div class="w-full px-2 mb-10 flex justify-center">
     <div class="w-full bg-gray-200 rounded-lg ">
          <div>
               <img src="{{ asset('storage/'.$item->image) }}" class="w-full h-full object-cover rounded-l-lg">
          </div>
          <div class="px-2 py-2">
               <div class="text-2xl font-semibold">{{ $item->name }}</div>
               <div class="text-sm text-gray-600 -mt-1 mb-3">({{ $item->designation }})</div>
               <div class="text-sm">
                    <div class="flex  ">
                         <div class="font-semibold w-1/3">Nationality</div>
                         <div class="px-2 w-2/3">{{ $item->nationality }}</div>
                    </div>
                    @if ($item->education && $item->education !== '-')
                    <div class="flex ">
                         <div class="font-semibold w-1/3">Education</div>
                         <div class="px-2 w-2/3">{!! nl2br($item->education) !!}</div>
                    </div>
                    @endif
                    <div class="flex ">
                         <div class="font-semibold w-1/3">Experience</div>
                         <div class="px-2 w-2/3">{!! nl2br($item->experience) !!}</div>
                    </div>
                    @if ($item->email && $item->email !== '-')
                    <div class=" mt-3">
                         <div>
                              <span class="fas fa-envelope"></span>
                              {{ $item->email }}
                         </div>
                         <div>
                              <span class="fas fa-phone"></span>
                              {{ $item->contact_number }}
                         </div>
                    </div>
                    @endif
               </div>

          </div>
     </div>
</div>
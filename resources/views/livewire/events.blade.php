<div class="container mx-auto mt-10">
    <div class="text-4xl text-red-600 text-center open-sans border-b border-gray-200 mb-10">
        Events
    </div>
    <div class="flex flex-wrap">
        @foreach ($events as $event)
        <div class="w-full md:w-1/2 p-4">
            <div>
                <img src="{{ asset('storage/'.$event->cover_photo) }}" class="w-full">
                <div class="bg-gray-100 p-3 rounded-b-lg flex items-center justify-between">
                    <div>
                        <div class="text-gray-600 font-semibold">{{ $event->name }}</div>
                        <div class="text-sm text-gray-500">
                            <i class="fas fa-calendar"></i> {{ $event->created_at->format('d F Y') }}
                        </div>
                        <div class="text-sm text-red-800 mt-3 font-semibold">
                            <i class="fas fa-map-marker"></i> {{ $event->location }}
                        </div>
                    </div>
                    <div>
                        <a href="{{ route('event.show',['slug' => $event->slug,'id' => $event->id ]) }}"
                            class="bg-teal-400 hover:bg-teal-500 text-white p-2 rounded">more info</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
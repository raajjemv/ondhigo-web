<div class="container mx-auto p-3 mt-10">
    <div class="shadow-lg rounded-b">
        <div class="p-3">
            <div class="open-sans text-4xl text-red-600">{{ $event->name }}</div>
            <div class="flex items-center justify-between mb-2">
                <div class="flex my-2">
                    <div class="text-sm text-red-800  font-semibold pr-3">
                        <i class="fas fa-map-marker"></i> {{ $event->location }}
                    </div>
                    <span class="text-gray-300">|</span>
                    <div class="pl-2 text-sm text-gray-500">
                        <i class="fas fa-calender"></i> {{ $event->created_at->format('d F Y') }}
                    </div>
                </div>
                <div>
                    <a href="https://www.facebook.com/sharer.php?u={{ url()->full() }}"
                        class="text-2xl mx-1 hover:text-blue-500 cursor-pointer text-gray-600"><i
                            class="fab fa-facebook"></i></a>
                    <a href="https://twitter.com/share?url={{ url()->full() }}"
                        class="text-2xl mx-1 hover:text-blue-500 cursor-pointer text-gray-600"><i
                            class="fab fa-twitter"></i></a>
                    <a href="viber://chats?text={{ url()->full() }}"
                        class="text-2xl mx-1 hover:text-blue-500 cursor-pointer text-gray-600"><i
                            class="fas fa-envelope-open"></i></a>
                </div>
            </div>
            <img src="{{ asset('storage/'.$event->cover_photo) }}" class="w-full h-96 object-contain md:object-cover">
        </div>
        <div class="text-gray-600 py-5 px-3">
            {!! $event->content !!}
        </div>
    </div>
</div>
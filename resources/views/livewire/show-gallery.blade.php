<div class="w-full">
    <div class="splide" data-splide='{"type":"loop"}'>
        <div class="splide__track">
            <ul class="splide__list">
                @foreach ($gallery as $item)
                <li class="splide__slide">
                    <img src="{{ asset('storage/'.$item->image) }}" class="w-full h-99 object-cover">
                </li>
                @endforeach
                {{-- <li class="splide__slide">Slide 02</li>
                <li class="splide__slide">Slide 03</li> --}}
            </ul>
        </div>
    </div>
</div>
@extends('layouts.main')
@section('content')

@if (session()->has('message'))
<x-modal size="max-w-xs" :visible="true">
    {{ session('message') }}
</x-modal>
@endif
<div class="">
    <carousel-cover :landing_page_covers="{{ $landing_page_covers }}" />

</div>

@if($promotion)
<div>
    <a href="{{ $promotion->url }}" target="_blank">
        <img src="{{ asset('storage/'.$promotion->home_page_image) }}">
    </a>
</div>
@endif
<div class="container mx-auto my-12">
    <div>
        <x-headings heading="FEATURED PRODUCTS" />
    </div>
    <div class="flex flex-wrap">
        @foreach ($featured_products as $item)
        <a class="w-1/2 md:w-1/4 px-4" href="{{ route('product.show',['slug'=> $item->slug,'id' => $item->id]) }}">
            <div>
                @if ($item->thumbnail)
                <img src="{{ asset('storage/'.$item->thumbnail) }}" class="w-full object-cover" alt="">
                @else
                <img src="{{ asset('storage/'.$item->image) }}" class="w-full h-56 object-contain" alt="">
                @endif
                {{-- <div class="text-md text-gray-600 uppercase p-2">{{ $item->name }}</div> --}}
    </div>
    </a>
    @endforeach
</div>
</div>
<div class="bg-gray-300 my-12 ">
    <div>
        <x-headings heading="OUR GLOBAL PARTNERS" color="text-red-700" />
    </div>
    <div class=" container mx-auto">
        <div class="">
            <partner-slides :partners="{{ $partners }}" />

        </div>
    </div>
</div>
<div class=" py-5">
    <div class="container mx-auto">
        <div>
            <x-headings heading="FEATURED VIDEOS" />
        </div>
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/2 px-2">
                <iframe class="w-full h-56 md:h-84"
                    src="http://www.youtube.com/embed/{{$featured_videos->first()->video}}" frameborder="0"
                    allowfullscreen></iframe>
            </div>
            <div class="w-full md:w-1/2 px-2 mt-6 md:mt-0">
                <div class="flex flex-wrap">
                    @foreach ($featured_videos->skip(1) as $video)
                    <div class="w-1/2 mb-6 px-0 md:px-2">
                        <div class="px-2">
                            <iframe class="w-full h-auto md:h-40" src="http://www.youtube.com/embed/{{$video->video}}"
                                frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mx-auto mb-10">
    <div>
        <div>
            <x-headings heading="News & Events" />
        </div>
        <div class="flex flex-wrap justify-center">
            @foreach ($events as $event)
            <div class="w-full md:w-1/3 px-3">
                <img src="{{ asset('storage/'.$event->cover_photo) }}" class="w-full">
                <div class="py-2 text-xl font-semibold fira-sans text-red-500">{{ $event->name }}</div>
                <div class="mt-3 text-sm flex justify-between">
                    <span class="text-gray-500">{{ $event->created_at->format('M d Y') }}</span>
                    <a href="{{ route('event.show',['slug' => $event->slug,'id' => $event->id]) }}"
                        class="rounded-lg px-2 py-1 bg-gray-100 text-gray-600  hover:bg-gray-200 hover:text-blue-500 cursor-pointer border border-gray-200">Read
                        more</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
@endsection
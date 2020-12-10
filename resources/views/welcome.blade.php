@extends('layouts.main')
@section('content')
@if (session()->has('message'))
<x-modal size="max-w-xs" :visible="true">
    {{ session('message') }}
</x-modal>
@endif
<div class="-mt-20 relative z-0">
    <a href="{{ $landing_page_cover->link }}">
        <img src="{{ asset('storage/'.$landing_page_cover->image) }}" class="w-full">
    </a>
</div>
<div class="border-t-8  border-black"
    style="background: url({{ asset('images/bg.jpg') }});background-repeat:no-repeat;background-size:100%">
    <div class="container mx-auto py-16">
        <div class="text-4xl text-white uppercase text-center text-shadow">Welcome to Ondhigo</div>
        <div class=" text-white text-center mt-5 leading-loose">
            ONDHIGO IS ONE OF THE LEADING DISTRIBUTOR OF INTERNATIONALLY RECOGNIZED BRANDS OF FOOD AND BEVERAGE PRODUCTS
            TO
            AN
            EXTENSIVE NETWORK OF WHOLESALERS, RETAILERS, RESORTS AND HOTELS IN THE MALDIVES. OUR GLOBAL NETWORK OF
            SUPPLIERS
            INCLUDES MANUFACTURERS FROM SRI LANKA, PAKISTAN, SAUDI ARABIA, CANADA, ITALY, TURKEY, MALAYSIA,
            SINGAPORE,INDIA,
            INDONESIA AND THAILAND WITH ITS COMMERCIAL OFFICE AND KEY DISTRIBUTION POINT LOCATED AT THE MAIN HARBOR OF
            THE
            CAPITAL
            CITY MALE', ONDHIGO HAS A DISTINCTIVE ADVANTAGE IN ATTRACTING MAJOR WHOLESALERS AND RETAILERS FROM DIFFERENT
            PARTS OF
            THE COUNTRY, WHO TRAVEL TO MALE'.
        </div>
    </div>
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
                <div class="text-md text-gray-600 uppercase p-2">{{ $item->name }}</div>
            </div>
        </a>
        @endforeach
    </div>
</div>
<div class="bg-black my-12 border-t-4 border-b-4 border-yellow-300"
    style="background:url({{ asset('images/bg-partners.jpg') }})">
    <div>
        <x-headings heading="OUT PARTNERS" color="gold-gradient-text" />
    </div>
    <div class=" container mx-auto">
        <div class="flex flex-wrap  justify-center items-center">
            @foreach ($partners as $partner)
            <a class="w-1/6 p-5" href="{{ $partner->link }}" target="_blank">
                <div>
                    <img src="{{ asset('storage/'.$partner->logo) }}" alt="{{ $partner->name }}" class="w-full">
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
<div class="bg-gray-100 py-5">
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
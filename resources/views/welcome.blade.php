@extends('layouts.main')
@section('content')
<div class="-mt-20 relative z-0">
    <img src="{{ asset('storage/'.$landing_page_cover->image) }}" class="w-full">
</div>
<div class="border-t-8  border-black"
    style="background: url({{ asset('images/bg.jpg') }});background-repeat:no-repeat;background-size:100%">
    <div class="container mx-auto py-10">
        <div class="text-4xl text-white uppercase text-center text-shadow">Welcome to Ondhigo</div>
        <div class=" text-white text-center mt-5">
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
<div class="container mx-auto">
    <div>
        <x-headings heading="FEATURED PRODUCTS" />
    </div>
    <div class="flex flex-wrap">
        @foreach ($featured_products as $item)
        <a class="w-1/2 md:w-1/4">
            <div class="p-2">
                @if ($item->thumbnail)
                <img src="{{ asset('storage/'.$item->thumbail) }}" class="w-full object-cover" alt="">
                @else
                <img src="{{ asset('storage/'.$item->image) }}" class="w-full h-56 object-contain" alt="">
                @endif
            </div>
        </a>
        @endforeach
    </div>
</div>
<div class="bg-black">
    <div class="container mx-auto">
        <div class="">

        </div>
    </div>
</div>
@endsection
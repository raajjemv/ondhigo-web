@extends('layouts.main')
@section('content')
<div class="-mt-20 relative z-0">
    <img src="{{ asset('storage/'.$landing_page_cover->image) }}" class="w-full">
</div>
<div class="border-t-8  border-black"
    style="background: rgb(196,30,30);
background: linear-gradient(90deg, rgba(196,30,30,0.9822129535407913) 0%, rgba(121,9,9,0.8393558106836485) 54%, rgba(196,30,30,1) 100%);">
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
@endsection
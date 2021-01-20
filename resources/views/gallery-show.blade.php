@extends('layouts.main')
@section('content')
<div class="w-full bg-black">
     <div class="splide" data-splide='{"type":"loop"}'>
          <div class="splide__track">
               <ul class="splide__list">
                    @foreach ($gallery as $item)
                    <li class="splide__slide relative">
                         <img src="{{ asset('storage/'.$item->image) }}" class="w-full h-screen object-contain">
                         <div class="absolute bottom-8 w-full text-3xl text-white text-center">{{ $item->caption }}
                         </div>
                    </li>
                    @endforeach
               </ul>
          </div>
     </div>
</div>
@endsection
@section('css')
<style>
     .menu,
     .footer {
          display: none !important
     }
</style>
@endsection
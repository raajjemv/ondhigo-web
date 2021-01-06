@extends('layouts.main')
@section('content')
<div class="container mx-auto">
     <div class="swiper-container">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
               <!-- Slides -->
               <div class="swiper-slide">Slide 1</div>
               <div class="swiper-slide">Slide 2</div>
               <div class="swiper-slide">Slide 3</div>
               ...
          </div>
          <!-- If we need pagination -->
          <div class="swiper-pagination"></div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

          <!-- If we need scrollbar -->
          <div class="swiper-scrollbar"></div>
     </div>
</div>
@endsection
@section('css')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
@endsection
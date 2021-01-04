<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <title>{{ config('app.name', 'Ondhigo') }}</title>
     <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
          integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
          crossorigin="anonymous" />
     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
     <link href="{{ asset('css/gallery/gallery.css') }}" rel="stylesheet">
     <link href="{{ asset('css/gallery/gallery-keyframes-swing.css') }}" rel="stylesheet">
     <link rel="stylesheet" href="{{ asset('css/app.css') }}">
     <style>
          .snap {
               -ms-scroll-snap-type: x mandatory;
               scroll-snap-type: x mandatory;
               -ms-overflow-style: none;
               scroll-behavior: smooth
          }

          .snap::-webkit-scrollbar {
               display: none;
          }

          .snap>div {
               scroll-snap-align: center;
          }

          .gallery {
               --gallery_width: 100%;
               --gallery_height: 100%;
          }

          .menu {
               display: hidden !important
          }
     </style>
     @yield('css')

</head>

<body>

     <livewire:navigation />

     @yield('content')


     <x-footer />


     @livewireScripts
     @stack('scripts')
     <script src="{{ mix('/js/app.js') }}"></script>
     <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
     <Script>
          var mySwiper = new Swiper('.swiper-container', {
          // Optional parameters
          direction: 'vertical',
          loop: true,
          
          // If we need pagination
          pagination: {
          el: '.swiper-pagination',
          },
          
          // Navigation arrows
          navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
          },
          
          // And if we need scrollbar
          scrollbar: {
          el: '.swiper-scrollbar',
          },
          })
     </script>

</body>


</html>
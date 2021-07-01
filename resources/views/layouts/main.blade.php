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

     {!! Meta::tag('title', 'Ondhigo') !!}
     {!! Meta::tag('description',config('app.ondhigo_description')) !!}
     {!! Meta::tag('robots','index,follow') !!}
     {!! Meta::tag('url', Request::url()); !!}
     {!! Meta::tag('image', asset('images/og.png')) !!}


     {!! Meta::tag('og:type','website') !!}
     {!! Meta::tag('og:title','Ondhigo') !!}
     {!! Meta::tag('og:description',config('app.ondhigo_description')) !!}
     {!! Meta::tag('og:url',Request::url()) !!}
     {!! Meta::tag('og:image',asset('images/og.png')) !!}
     {!! Meta::tag('fb:app_id','2972430516410512') !!}


     {!! Meta::tag('twitter:card','summary_large_image') !!}
     {!! Meta::tag('twitter:site',Request::url()) !!}
     {!! Meta::tag('twitter:creator','ondhigo.com') !!}
     {!! Meta::tag('twitter:title','Ondhigo') !!}
     {!! Meta::tag('twitter:description',config('app.ondhigo_description')) !!}
     {!! Meta::tag('twitter:image',asset('images/og.png')) !!}

     <!-- Global site tag (gtag.js) - Google Analytics -->
     <script async src="https://www.googletagmanager.com/gtag/js?id=G-QVZZFGE3Q9"></script>
     <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-QVZZFGE3Q9');
     </script>

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
     <div id="fb-root"></div>
     <script async defer crossorigin="anonymous"
          src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0&appId=2972430516410512&autoLogAppEvents=1"
          nonce="NDnPDVfA"></script>
     <livewire:navigation />
     <div id="app">
          @yield('content')
     </div>


     <x-footer />


     @livewireScripts
     <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
     <script src="{{ mix('/js/app.js') }}"></script>
     @stack('scripts')
</body>


</html>
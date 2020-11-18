<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <title>{{ config('app.name', 'Ondhigo') }}</title>
     <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
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
     </style>
     @yield('css')
</head>

<body>

     <livewire:navigation />

     @yield('content')
     <Br><Br><Br><Br><Br><Br><Br><Br><Br><Br><Br></body>

</html>
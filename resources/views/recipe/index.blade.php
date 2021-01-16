@extends('layouts.main')
@section('content')
<div class="container mx-auto mt-10">
     <div class="text-4xl text-red-600 text-center open-sans border-b border-gray-200 mb-10">
          Recipe's
     </div>
     <div class="flex flex-wrap">
          @foreach ($recipes as $recipe)
          <div class="w-full md:w-1/3 px-5 mb-5">
               <iframe class="w-full h-48 md:h-56" src="http://www.youtube.com/embed/{{$recipe->youtube_id}}"
                    frameborder="0" allowfullscreen></iframe>
               <div class="text-lg text-gray-700 py-3">{{ $recipe->name }}</div>
          </div>
          @endforeach
     </div>
     <div class="my-10">
          {{ $recipes->links() }}
     </div>
</div>
@endsection
@extends('layouts.main')
@section('content')
<div class="container mx-auto mt-10">
     <div class="text-4xl text-red-600 text-center open-sans border-b border-gray-200 mb-10">
          Recipes
     </div>
     <div class="flex flex-wrap">
          @foreach ($recipes as $recipe)
          <a href="{{ route('recipe.show',['recipe' => $recipe->id]) }}" class="w-full md:w-1/3 px-5 mb-10">
               <div class="shadow-lg rounded-lg overflow-hidden">
                    <iframe class="w-full h-48 md:h-56" src="http://www.youtube.com/embed/{{$recipe->youtube_id}}"
                         frameborder="0" allowfullscreen></iframe>
                    <div class="p-2">
                         <div class="text-lg text-gray-700 pt-2">{{ $recipe->name }}</div>
                         <div class="text-sm text-gray-500">{!! $recipe->short_description !!}</div>
                    </div>
               </div>
          </a>
          @endforeach
     </div>
     <div class="my-10">
          {{ $recipes->links() }}
     </div>
</div>
@endsection
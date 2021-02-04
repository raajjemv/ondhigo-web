@extends('layouts.main')
@section('content')
<div class="container mx-auto mt-10 px-2">
     <div>
          <div class="uppercase text-4xl text-red-600  open-sans border-b border-gray-200 mb-10">
               {{ $recipe->name }}
          </div>
     </div>
     <div class="flex flex-wrap">
          <div class="w-full md:w-2/3">

               <div class="text-gray-600 pb-4">{!! $recipe->description !!}</div>
               <div class="mt-3 w-full md:w-3/5">
                    <iframe class="w-full  h-48 md:h-72" src="http://www.youtube.com/embed/{{$recipe->youtube_id}}"
                         frameborder="0" allowfullscreen></iframe>
               </div>
               <div class="px-2 py-4">
                    {!! $recipe->content !!}
               </div>
          </div>
          <div class="w-full md:w-1/3 px-0 md:px-4 mt-5 md:mt-0 ">
               <div class="border border-gray-200 shadow-lg rounded p-2 md:p-4">
                    <table>
                         <tr>
                              <th class="text-left pb-4 text-gray-700 px-2">Prep</th>
                              <td class="text-gray-600 pb-4">{{ $recipe->prep }}</td>
                         </tr>
                         <tr>
                              <th class="text-left pb-4 text-gray-700 px-2">Additional</th>
                              <td class="text-gray-600 pb-4">{{ $recipe->additional }}</td>
                         </tr>
                         <tr>
                              <th class="text-left pb-4 text-gray-700 px-2">Total</th>
                              <td class="text-gray-600 pb-4">{{ $recipe->total }}</td>
                         </tr>
                         <tr>
                              <th class="text-left pb-4 text-gray-700 px-2">Servings</th>
                              <td class="text-gray-600 pb-4">{{ $recipe->servings }}</td>
                         </tr>
                         <tr>
                              <th class="text-left pb-4 text-gray-700 px-2">Yield</th>
                              <td class="text-gray-600 pb-4">{{ $recipe->yield }}</td>
                         </tr>

                    </table>

               </div>
          </div>
     </div>

</div>
@endsection
@section('css')
<style>
     ul {
          padding-left: 20px;
          list-style: circle;
          margin-top: 10px;
     }

     @media only screen and (max-width: 600px) {
          ul {
               padding-left: 20px;
          }
</style>
@endsection
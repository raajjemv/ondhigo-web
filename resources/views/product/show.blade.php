@extends('layouts.main')
@section('content')
<div class="container mx-auto mt-10 p-3">
     <div class="bg-gray-100 rounded p-3 text-gray-600">
          {{ $product->category->name }} > <span class="font-semibold">{{ $product->name }}</span>
     </div>
     <div class="flex flex-wrap my-5">
          <div class="w-full md:w-1/2 pr-0 md:pr-3">
               @livewire('product-images', ['cover' => $product->image,'product_images' => $product->product_images])
          </div>
          <div class="w-full md:w-1/2">
               <div class="mb-4">
                    <div class="text-4xl text-gray-600 open-sans">{{ $product->name }}</div>
                    <div class="mt-2 border-b border-gray-200 pb-3">
                         <span
                              class="bg-green-400 text-white p-1 text-sm rounded-lg">{{ $product->quantity > 0 ? 'in-stock' : 'outof-stock' }}</span>
                    </div>
                    <div class="mt-3 border-b border-gray-200 pb-3">
                         <div class="flex justify-between items-center">
                              <div>
                                   {{-- <span class="text-gray-600">MVR</span> 
                                   <span
                                        class="text-4xl josefin-sans text-red-700">{{ number_format($product->price,2) }}</span>
                                   --}}
                                   <livewire:add-to-cart :product="$product" />
                              </div>
                              <a href="{{ route('product.index',['brand' => $product->brand->id]) }}">
                                   <img src="{{ asset('storage/'.$product->brand->logo) }}" class="w-24">
                                   <span class="text-sm text-blue-500">shop by this brand</span>
                              </a>
                         </div>
                    </div>
               </div>
               <div>

               </div>
          </div>
     </div>
     <div class="">
          <div class="bg-gray-100 rounded px-3 py-2">
               <div class="my-5 text-red-600 text-4xl font-bold py-3 open-sans">
                    About
               </div>
               <div class="text-gray-600 leading-7">{!! $product->content !!}</div>
          </div>
     </div>
     <div>
          <div class="my-10">
               <div class="rounded-t-lg bg-gray-200  p-3">Related Products</div>
               <div class="flex flex-wrap bg-gray-50  shadow">
                    @foreach($related_products as $product)
                    <a class="w-1/2 lg:w-1/6 p-3"
                         href="{{ route('product.show',['slug' => $product->slug,'id' => $product->id]) }}">
                         <div>
                              @if ($product->thumbnail)
                              <img src="{{ asset('storage/'.$product->thumbnail) }}" class="w-full object-cover" alt="">
                              @else
                              <img src="{{ asset('storage/'.$product->image) }}" class="w-full h-56 object-contain"
                                   alt="">
                              @endif
                              <div class="text-md text-gray-600 uppercase p-2">{{ $product->name }}</div>
                         </div>
                    </a>
                    @endforeach
               </div>
          </div>
     </div>
</div>
@endsection

@extends('layouts.store')
@section('content')
<!-- component -->
<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
{{-- <div class="bg-white">
    <div class="py-16 sm:py-24 lg:mx-auto lg:max-w-7xl lg:px-8">
      <div class="flex items-center justify-between px-4 sm:px-6 lg:px-0">
        <h2 class="text-2xl font-bold tracking-tight text-gray-900">My wishlist✨</h2>
        <a href="{{route('product')}}" class="hidden text-sm font-semibold text-blue-600 hover:text-cyan-500 sm:block">
          Search more
          <span aria-hidden="true"> &rarr;</span>
        </a>
      </div>
    
      
      @forelse ($favories as $favori)
      <div class="relative mt-8">
        <div class="relative -mb-6 w-full overflow-x-auto pb-6">
          <ul role="list" class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            <li class="inline-flex w-64 flex-col text-center lg:w-auto">
              <div class="group relative">
          
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200">
                  <img src="{{$favori->product->category->image}}" alt="Black machined steel pen with hexagonal grip and small white logo at top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                </div>
                <div class="mt-6">
                  <p class="text-sm text-gray-500">{{$favori->product->category->name}}</p>
                  <h3 class="mt-1 font-semibold text-gray-900">
                    <a href="#">
                      <span class="absolute inset-0"></span>
                      {{$favori->product->name}}
                    </a>
                  </h3>
                  <p class="mt-1 text-gray-900">{{$favori->product->price}}€</p>
                </div>
              
              </div>
              <h4 class="sr-only">Available colors</h4>
            </li>
  
            <!-- More products... -->
          </ul>
           
        </div> 
        
      </div>
  @empty
          
            @endforelse
      <div class="mt-12 flex px-4 sm:hidden">
        <a href="#" class="text-sm font-semibold text-blue-600 hover:text-cyan-500">
          Search more
          <span aria-hidden="true"> &rarr;</span>
        </a>
      </div>
    </div>
  </div>
  @endsection --}}
  
  @forelse ($favories as $favori)
  <div class="bg-orange-50 ">
<div class="mx-auto max-w-5xl px-6  xl:px-0">
  <ul role="list" class="divide-y divide-gray-100">
    <li class="flex justify-between gap-x-6 py-5">
      <div class="flex min-w-0 gap-x-4">
        <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{$favori->product->category->image}}" alt="">
        <div class="min-w-0 flex-auto">
          <p class="text-sm font-semibold leading-6 text-gray-900">{{$favori->product->name}}</p>
          <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{$favori->product->category->name}}</p>
        </div>
      </div>
      <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
        <p class="text-sm leading-6 text-gray-900"> <a  href="{{route('panier.ajouter',$favori->product)}}">Add to cart</a>
        <p class="mt-1 text-xs leading-5 text-gray-500"><a href="{{route('favori.edit',$favori)}}">Delete to wishlist</a></p></p>
      </div>
    </li>
  </ul>
</div>
</div>
  @empty
  Your wishlist is sadly empty :(
  @endforelse
  @endsection
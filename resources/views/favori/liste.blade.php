
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
<div class="bg-white">
    <div class="py-16 sm:py-24 lg:mx-auto lg:max-w-7xl lg:px-8">
      <div class="flex items-center justify-between px-4 sm:px-6 lg:px-0">
        <h2 class="text-2xl font-bold tracking-tight text-gray-900">My wishlist✨</h2>
        <a href="{{route('product')}}" class="hidden text-sm font-semibold text-blue-600 hover:text-cyan-500 sm:block">
          Search more
          <span aria-hidden="true"> &rarr;</span>
        </a>
      </div>
  
      <div class="relative mt-8">
        <div class="relative -mb-6 w-full overflow-x-auto pb-6">
          <ul role="list" class="mx-4 inline-flex space-x-8 sm:mx-6 lg:mx-0 lg:grid lg:grid-cols-4 lg:gap-x-8 lg:space-x-0">
            <li class="inline-flex w-64 flex-col text-center lg:w-auto">
              <div class="group relative">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200">
                  <img src="https://m.media-amazon.com/images/I/61bG3pY7k-L.jpg" alt="Black machined steel pen with hexagonal grip and small white logo at top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                </div>
                <div class="mt-6">
                  <p class="text-sm text-gray-500">Black</p>
                  <h3 class="mt-1 font-semibold text-gray-900">
                    <a href="#">
                      <span class="absolute inset-0"></span>
                      Prime drink
                    </a>
                  </h3>
                  <p class="mt-1 text-gray-900">$3</p>
                </div>
              </div>
  
              <h4 class="sr-only">Available colors</h4>
              <ul role="list" class="mt-auto flex items-center justify-center space-x-3 pt-6">
                <li class="h-4 w-4 rounded-full border border-black border-opacity-10" style="background-color: #111827">
                  <span class="sr-only">Black</span>
                </li>
                <li class="h-4 w-4 rounded-full border border-black border-opacity-10" style="background-color: #fde68a">
                  <span class="sr-only">Brass</span>
                </li>
                <li class="h-4 w-4 rounded-full border border-black border-opacity-10" style="background-color: #e5e7eb">
                  <span class="sr-only">Chrome</span>
                </li>
              </ul>
            </li>
  
            <!-- More products... -->
          </ul>
        </div>
      </div>
  
      <div class="mt-12 flex px-4 sm:hidden">
        <a href="#" class="text-sm font-semibold text-blue-600 hover:text-cyan-500">
          Search more
          <span aria-hidden="true"> &rarr;</span>
        </a>
      </div>
    </div>
  </div>
  @endsection
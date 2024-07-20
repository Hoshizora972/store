{{-- @extends('layouts.store')
@section('content')
@php
    $total = 0;
@endphp
    <ul class="divide-y divide-gray-100">

        @forelse ($paniers as $panier )
        @php
            $total = $total + ($panier->product->price * $panier->quantite);
        @endphp
            <li class="flex justify-between gap-x-6 py-5">
            <div class="flex min-w-0 gap-x-4">
                <img src="" alt="l" class="h-11 w-11 flex-none rounded-full bg-gray-50">
                <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">{{$panier->product->name}}</p>
                    
                </div>
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                <p class="text-sm leading-6 text-gray-500">{{$panier->product->price}} x {{$panier->quantite}}</p>
                <p class="text-sm leading-6 text-gray-500"><a href="{{route('panier.moins',$panier)}}">➖</a><a href="{{route('panier.ajouter', $panier->product)}}">➕</a></p>
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                <p class="text-sm leading-6 text-gray-800">{{$panier->product->price * $panier->quantite}}</p>
                <p class="text-sm leading-6 text-gray-500"><a href="{{route('panier.remove',$panier)}}">🗑️</a></p>
            </div>
        </li>
        @empty
            Votre panier est tristement vide :(
        @endforelse
        <li class="flex justify-between gap-x-6 py-5">
            <div class="flex min-w-0 gap-x-4">
            
                <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900"></p>
                    <p class="text-sm font-semibold leading-6 text-gray-900"></p>
                </div>
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                <p class="text-sm leading-6 text-gray-500"></p>
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                <p class="text-sm leading-6 text-gray-800">Total : {{$total}}</p>
            </div>
        </li>
    </ul> --}}
    <!-- component -->
<!-- Create By Joker Banny -->

@extends('layouts.store')
@section('content')
@php
    $total = 0;
@endphp

<style>
    @layer utilities {
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
  }
</style>

<body>
    <div class="h-screen bg-orange-100 bg-opacity-50 pt-20">
    <h1 class="mb-10 text-center text-2xl font-bold">Cart Items</h1>
    <div class="mx-auto max-w-5xl justify-center px-6 md:flex md:space-x-6 xl:px-0">
        <div class="rounded-lg md:w-2/3">
        @forelse ($paniers as $panier)
        @php
        $total = $total + ($panier->product->price * $panier->quantite);
        @endphp
        <div class="justify-between mb-6 rounded-lg bg-white p-6 shadow-md sm:flex sm:justify-start">
            
            <img src="https://images.unsplash.com/photo-1587563871167-1ee9c731aefb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1131&q=80" alt="product-image" class="w-full rounded-lg sm:w-40" />
            <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
                    <div class="mt-5 sm:mt-0">
                        <h2 class="text-lg font-bold text-rose-900">{{$panier->product->name}}</h2>
                        <p class="mt-1 text-xs text-gray-700">{{$panier->product->price}} x {{$panier->quantite}}</p>
                    </div>
                    <div class="mt-4 flex justify-between im sm:space-y-6 sm:mt-0 sm:block sm:space-x-6">
                        <div class="flex items-center border-gray-100">
                            <span class="cursor-pointer rounded-l bg-gray-100 py-1 px-3.5 duration-100 hover:bg-rose-800 hover:text-blue-50"> <a href="{{route('panier.moins',$panier)}}">➖</a> </span>
                            <input class="h-8 w-8 border bg-white text-center text-xs outline-none" type="number" value="{{$panier->quantite}}" min="1" />
                            <span class="cursor-pointer rounded-r bg-gray-100 py-1 px-3 duration-100 hover:bg-rose-800 hover:text-blue-50"><a href="{{route('panier.ajouter', $panier->product)}}">➕</a></span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <p class="text-sm text-rose-900">{{$panier->product->price * $panier->quantite}}€</p>
                            <p class="text-sm leading-6 text-gray-500"><a href="{{route('panier.remove',$panier)}}">🗑️</a></p>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            Votre panier est tristement vide :(
                @endforelse
            </div>
      <!-- Sub total -->
      <div class="mt-6 h-full rounded-lg border bg-white p-6 shadow-md md:mt-0 md:w-1/3">
        {{-- <div class="mb-2 flex justify-between">
          <p class="text-gray-700">Subtotal</p>
          <p class="text-gray-700">{{$panier->product->price * $panier->quantite}}</p>
        </div>
        <div class="flex justify-between">
          <p class="text-gray-700">Shipping</p>
          <p class="text-gray-700">$4.99</p>
        </div> --}}
        <hr class="my-4" />
        <div class="flex justify-between">
          <p class="text-lg font-bold">Total</p>
          <div class="">
            <p class="mb-1 text-lg font-bold">Total : {{$total}}</p>
            
          </div>
        </div>
        <button href="#" class="mt-6 w-full rounded-md bg-rose-800 py-1.5 font-medium text-blue-50 hover:bg-rose-900">Check out</button>
       {{-- <a  href="#" class="mt-6 flex w-full items-center justify-center rounded-md border border-transparent bg-pink-700 px-8 py-3 text-base font-medium text-white hover:bg-pink-900 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2">Check out</a> --}}
    </div>
      
    </div>
  </div>
</body><footer>
@endsection


</footer>

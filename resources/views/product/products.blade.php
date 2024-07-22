@extends('layouts.store')

@section('content')
<!-- component -->
<div class="flex py-10 sm:py-10 flex-col bg-orange-50 border-gray-900  m-auto p-auto  ">
    
    
        <div class="flex overflow-x-scroll pb-10 hide-scroll-bar">
            <div class="flex flex-nowrap lg:ml-40 md:ml-20 ml-10 ">
                @foreach ($categories as $category)
                <div class="inline-block px-3">
                    <h2 class=" text-center text-xl font-bold tracking-tight hover:text-rose-900 text-gray-900">{{$category->name}}</h2>
                    <div href="{{route('product.category',$category->id)}}" class="w-64 h-64 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                            <button >
                                <img src="{{$category->image}}" alt="image"><a href="{{route('product.category',$category->id)}}">
                            </button>
                        
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <x-product-card :products="$products"/>
        {{ $products->onEachSide(5)->links() }}
        @endsection

    </div>
    
    
    <style>
        .hide-scroll-bar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
    .hide-scroll-bar::-webkit-scrollbar {
        display: none;
    }
    </style>

    {{-- Lien de pagination --}}
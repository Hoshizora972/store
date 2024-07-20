@extends('layouts.store')

@section('content')
<!-- component -->
<div class="flex flex-col bg-white m-auto p-auto">
    <h1 class="flex py-5 lg:px-20 md:px-10 px-5 lg:mx-40 md:mx-20 mx-5 font-bold text-4xl text-gray-800">
            Category
    </h1>
        <div class="flex overflow-x-scroll pb-10 hide-scroll-bar">
            <div class="flex flex-nowrap lg:ml-40 md:ml-20 ml-10 ">

                @foreach ($categories as $category)
                <div class="inline-block px-3">
                    <div class="w-64 h-64 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <li class="categories p-1 rounded-full p-5">
                            <button class="">
                                <a href="{{route('product.category',$category->id)}}" class="italic">#{{$category->name}}</a>
                            </button>
                        </li>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
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
    <x-product-card :products="$products"/>

    {{-- Lien de pagination --}}
    {{ $products->onEachSide(5)->links() }}
@endsection
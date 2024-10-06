{{-- 
<div class="bg-gradient-to-t from-amber-900 to-orange-50">
  <div class="mx-auto mt-4 max-w-2xl px-4 py-5 sm:px-6 sm:py-5 lg:max-w-7xl lg:px-8">
      <h2 class="text-2xl font-bold tracking-tight text-gray-900">The most popular products</h2>
      <div class=" py-2 mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        @foreach ($products as $product ) 
        <div class="group relative">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="{{$product->category->image}}" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="{{route('product.detail', $product )}}">
                  <span aria-hidden="true" class="absolute inset-0 text-gray-900 "></span>
                 {{$product->name}}
                </a>
              </h3>
              <p class="mt-1 text-sm text-rose-900">{{$product->category->name}}</p>
            </div>
            <p class="text-sm font-medium text-gray-900">{{$product->price}}€</p>
          </div>
        </div>
      @endforeach
        <!-- More products... -->
      </div>
    </div>
  </div> --}}
  <div class="group">
    <div class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md duration-500">
        <img src="{{$product->category->image}}" alt="">

        <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 duration-500">
            <a href="{{route('panier.ajouter', $product)}}" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-slate-900 text-white w-full rounded-md">Add to Cart</a>
        </div>

        <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 duration-500 space-y-1">
            <li><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="heart" class="size-4"></i></a></li>
            <li class="mt-1"><a href="shop-item-detail.html" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="eye" class="size-4"></i></a></li>
            <li class="mt-1"><a href="javascript:void(0)" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center rounded-full bg-white text-slate-900 hover:bg-slate-900 hover:text-white shadow"><i data-feather="bookmark" class="size-4"></i></a></li>
        </ul>

        <ul class="list-none absolute top-[10px] start-4">
            <li><a href="javascript:void(0)" class="bg-red-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5">New</a></li>
        </ul>
    </div>

    <div class="mt-4">
        <a href="{{route('product.detail', $product )}}" class="hover:text-orange-500 text-lg font-medium">{{$product->name}}</a>
        <div class="flex justify-between items-center mt-1">
            <p>$16.00 <del class="text-slate-400">{{$product->price}}</del></p>
            <ul class="font-medium text-amber-400 list-none">
                <li class="inline"><i class="mdi mdi-star"></i></li>
                <li class="inline"><i class="mdi mdi-star"></i></li>
                <li class="inline"><i class="mdi mdi-star"></i></li>
                <li class="inline"><i class="mdi mdi-star"></i></li>
                <li class="inline"><i class="mdi mdi-star"></i></li>
            </ul>
        </div>
    </div>
</div><!--end content-->
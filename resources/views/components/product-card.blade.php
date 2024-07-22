
<div class="bg-gradient-to-t from-amber-800 to-orange-50">
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
  </div>
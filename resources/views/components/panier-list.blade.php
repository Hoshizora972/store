@php
    $subtotal = 0;
    $taxe = 20;
@endphp
{{-- {{$product->isfavoris->where('user_id',auth()->user()->id)}} --}}
        <!-- Start Hero -->
        <section class="relative table w-full py-20 lg:py-24 bg-gray-50 dark:bg-slate-800">
        <div class="container relative">
            <div class="grid grid-cols-1 mt-14">
                <h3 class="text-3xl leading-normal font-semibold">Shopcart</h3>
            </div><!--end grid-->

            <div class="relative mt-3">
                <ul class="tracking-[0.5px] mb-0 inline-block">
                    <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out hover:text-orange-500"><a href="index.html">Cartzio</a></li>
                    <li class="inline-block text-base text-slate-950 dark:text-white mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
                    <li class="inline-block uppercase text-[13px] font-bold text-orange-500" aria-current="page">Shopcart</li>
                </ul>
            </div>
        </div><!--end container-->
    </section><!--end section-->
    <!-- End Hero -->

    <!-- Start -->
    <section class="relative md:py-24 py-16">
        <div class="container relative">
            <div class="grid lg:grid-cols-1">
                <div class="relative overflow-x-auto shadow dark:shadow-gray-800 rounded-md">
                    <table class="w-full text-start">
                        <thead class="text-sm uppercase bg-slate-50 dark:bg-slate-800">
                            <tr>
                                <th scope="col" class="p-4 w-4"></th>
                                <th scope="col" class="text-start p-4 min-w-[220px]">Product</th>
                                <th scope="col" class="p-4 w-24 min-w-[100px]">Price</th>
                                <th scope="col" class="p-4 w-56 min-w-[220px]">Qty</th>
                                <th scope="col" class="p-4 w-24 min-w-[100px]">Total($)</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse ($paniers as $panier )
                            @php
                            $subtotal = $subtotal + ($panier->product->price * $panier->quantite);
                            $taxe = $taxe + $subtotal;
                            @endphp
                            <x-panier-card :panier="$panier"/>
                        @empty
                        Your cart is sadly empty :(
                        @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 mt-6 gap-6">
                    <div class="lg:col-span-9 md:order-1 order-3">
                        <div class="space-x-1">
                            <a href="{{route('commande.create')}}" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle text-base text-center bg-orange-500 text-white rounded-md mt-2">Shop Now</a>
                            
                            {{-- @if (count($product->isfavoris->where('user_id',auth()->user()->id))>0)
                            <a href="{{route('favori.edit',$product)}}" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle text-base text-center rounded-md bg-orange-500/5 hover:bg-orange-500 text-orange-500 hover:text-white mt-2">Add to wishlist</a>
                            @else
                            <a href="{{route('favori.edit',$product)}}" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle text-base text-center rounded-md bg-orange-500/5 hover:bg-orange-500 text-orange-500 hover:text-white mt-2">Delete to wishlist</a>
                            @endif --}}
                        </div>
                    </div>

                    <div class="lg:col-span-3 md:order-2 order-1">
                        <ul class="list-none shadow dark:shadow-gray-800 rounded-md">
                            <li class="flex justify-between p-4">
                                <span class="font-semibold text-lg">Subtotal :</span>
                                <span class="text-slate-400">{{$subtotal}}€</span>
                            </li>
                            <li class="flex justify-between p-4 border-t border-gray-100 dark:border-gray-800">
                                <span class="font-semibold text-lg">Taxes :</span>
                                <span class="text-slate-400">0€</span>
                            </li>
                            <li class="flex justify-between font-semibold p-4 border-t border-gray-200 dark:border-gray-600">
                                <span class="font-semibold text-lg">Total :</span>
                                <span class="font-semibold">{{$subtotal}}€</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--end container-->

        <div class="container relative md:mt-24 mt-16">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center">
                <div class="lg:col-span-5 md:col-span-6">
                    <img src="assets/images/envelope.svg" class="mx-auto d-block" alt="">
                </div>
                
                    <div class="inline-block">
                        <div class="pt-4 flex items-center border-t border-gray-100 dark:border-gray-800">
                        </div>
                    </div>
                </div>
            </div><!--end gird-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->
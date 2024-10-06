@extends('layouts.shop')

@section('content')
{{$product->isfavoris->where('user_id',auth()->user()->id)}}
{{-- <div class="container">
    <div class="flex w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl">
        <div class="relative flex w-full items-center overflow-hidden bg-white px-4 pb-8 pt-14 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">

            <div class="grid w-full grid-cols-1 items-start gap-x-6 gap-y-8 sm:grid-cols-12 lg:gap-x-8">
                <div class="aspect-h-3 aspect-w-2 overflow-hidden rounded-lg bg-gray-100 sm:col-span-4 lg:col-span-5">
                    <img src="{{$product->category->image}}" alt="Two each of gray, white, and black shirts arranged on table." class="object-cover object-center">
                </div>
                <div class="sm:col-span-8 lg:col-span-7">
                    <h2 class="text-2xl font-bold text-gray-900 sm:pr-12">{{$product->name}}</h2>

                    <section aria-labelledby="information-heading" class="mt-2">
                        <h3 id="information-heading" class="sr-only">Product information</h3>

                        <p class="text-2xl text-gray-900">{{$product->price}} €</p>

                        <!-- Reviews -->
                        <div class="mt-6">
                            <h4 class="sr-only">Reviews</h4>
                            <div class="flex items-center">
                                <div class="flex items-center">
                                    <!-- Active: "text-gray-900", Default: "text-gray-200" -->
                                    <svg class="h-5 w-5 flex-shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                    <svg class="h-5 w-5 flex-shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                    <svg class="h-5 w-5 flex-shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                    <svg class="h-5 w-5 flex-shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                    <svg class="h-5 w-5 flex-shrink-0 text-gray-200" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <p class="sr-only">3.9 out of 5 stars</p>
                                <a href="#" class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500">117 reviews</a>
                            </div>
                        </div>
                    </section>

                    <section aria-labelledby="options-heading" class="mt-10">
                    <h3 id="options-heading" class="sr-only">Product options</h3>
                    <!-- Colors -->
                    <fieldset aria-label="Choose a color">
                        <legend class="text-sm font-medium text-gray-900">Description</legend>
                        <div class="mt-4 flex items-center space-x-3">
                            <p class="text-sm font-medium text-black">{{$product->description}}</p>
                        </div>
                    </fieldset>


                    <a  href="{{route('panier.ajouter',$product)}}" class="mt-6 flex w-full items-center justify-center rounded-md border border-transparent bg-rose-700 px-8 py-3 text-base font-medium text-white hover:bg-rose-900 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:ring-offset-2">Add to bag</a>

                    @if (count($product->isfavoris->where('user_id',auth()->user()->id))>0)

                    <a  href="{{route('favori.edit',$product)}}" class="mt-6 flex w-full items-center justify-center rounded-md border border-transparent bg-pink-700 px-8 py-3 text-base font-medium text-white hover:bg-pink-900 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2">Delete to wishlist</a>
                    
                    @else
                    <a  href="{{route('favori.edit',$product)}}" class="mt-6 flex w-full items-center justify-center rounded-md border border-transparent bg-pink-700 px-8 py-3 text-base font-medium text-white hover:bg-pink-900 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2">Add to wishlist</a>
                    @endif
                    
                    </section>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Start Hero -->
<section class="relative table w-full py-20 lg:py-24 md:pt-28 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="grid grid-cols-1 mt-14">
            <h3 class="text-3xl leading-normal font-semibold">Mens Brown Jecket</h3>
        </div><!--end grid-->

        <div class="relative mt-3">
            <ul class="tracking-[0.5px] mb-0 inline-block">
                <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out hover:text-orange-500"><a href="index.html">Cartzio</a></li>
                <li class="inline-block text-base text-slate-950 dark:text-white mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
                <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out hover:text-orange-500"><a href="shop-grid.html">Store</a></li>
                <li class="inline-block text-base text-slate-950 dark:text-white mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
                <li class="inline-block uppercase text-[13px] font-bold text-orange-500" aria-current="page">Mens Brown Jecket</li>
            </ul>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 gap-6">
            <div class="lg:col-span-5">
                <div class="grid md:grid-cols-12 gap-3">
                    <div class="md:col-span-12">
                        <a href="assets/images/shop/mens-jecket.jpg" class="lightbox duration-500 group-hover:scale-105" title="">
                            <img src="{{$product->category->image}}" class="shadow dark:shadow-gray-700" alt="Mens Brown Jecket">
                        </a>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7">
                <div class="lg:ms-6 sticky top-20">
                    <h5 class="text-2xl font-semibold">Mens Brown Jecket</h5>
                    <div class="mt-2">
                        <span class="text-slate-400 font-semibold me-1">$16USD <del class="text-red-600">$21USD</del></span>

                        <ul class="list-none inline-block text-orange-400">
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline text-slate-400 font-semibold">4.8 (45)</li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <h5 class="text-lg font-semibold">Overview :</h5>
                        <p class="text-slate-400 mt-2">{{$product->description}}</p>
                    </div>
                    <div class="grid lg:grid-cols-2 grid-cols-1 gap-6 mt-4">
                        <div class="flex items-center">
                        </div><!--end content-->
                    </div><!--end grid-->

                    <div class="mt-4 space-x-1">
                        <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle text-base text-center bg-orange-500 text-white rounded-md mt-2">Shop Now</a>
                        <a href="" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle text-base text-center rounded-md bg-orange-500/5 hover:bg-orange-500 text-orange-500 hover:text-white mt-2">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid md:grid-cols-12 grid-cols-1 mt-6 gap-6">
            

            <div class="lg:col-span-9 md:col-span-7">
                    </div>

                    <div class="hidden" id="review" role="tabpanel" aria-labelledby="review-tab">
                        <div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img src="assets/images/client/01.jpg" class="h-11 w-11 rounded-full shadow" alt="">

                                    <div class="ms-3 flex-1">
                                        <a href="" class="text-lg font-semibold hover:text-orange-500 duration-500">Calvin Carlo</a>
                                        <p class="text-sm text-slate-400">6th May 2022 at 01:25 pm</p>
                                    </div>
                                </div>

                                <a href="" class="text-slate-400 hover:text-orange-500 duration-500 ms-5"><i class="mdi mdi-reply"></i> Reply</a>
                            </div>
                            <div class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-800 mt-6">
                                <ul class="list-none inline-block text-orange-400">
                                    <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                    <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                    <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                    <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                    <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                    <li class="inline text-slate-400 font-semibold">5.0</li>
                                </ul>

                                <p class="text-slate-400 italic">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                            </div>
                        </div>

                        <div class="mt-8">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img src="assets/images/client/02.jpg" class="h-11 w-11 rounded-full shadow" alt="">

                                    <div class="ms-3 flex-1">
                                        <a href="" class="text-lg font-semibold hover:text-orange-500 duration-500">Calvin Carlo</a>
                                        <p class="text-sm text-slate-400">6th May 2022 at 01:25 pm</p>
                                    </div>
                                </div>

                                <a href="" class="text-slate-400 hover:text-orange-500 duration-500 ms-5"><i class="mdi mdi-reply"></i> Reply</a>
                            </div>
                            <div class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-800 mt-6">
                                <ul class="list-none inline-block text-orange-400">
                                    <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                    <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                    <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                    <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                    <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                    <li class="inline text-slate-400 font-semibold">5.0</li>
                                </ul>

                                <p class="text-slate-400 italic">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                            </div>
                        </div>

                        <div class="mt-8">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img src="assets/images/client/03.jpg" class="h-11 w-11 rounded-full shadow" alt="">

                                    <div class="ms-3 flex-1">
                                        <a href="" class="text-lg font-semibold hover:text-orange-500 duration-500">Calvin Carlo</a>
                                        <p class="text-sm text-slate-400">6th May 2022 at 01:25 pm</p>
                                    </div>
                                </div>

                                <a href="" class="text-slate-400 hover:text-orange-500 duration-500 ms-5"><i class="mdi mdi-reply"></i> Reply</a>
                            </div>
                            <div class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-800 mt-6">
                                <ul class="list-none inline-block text-orange-400">
                                    <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                    <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                    <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                    <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                    <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                    <li class="inline text-slate-400 font-semibold">5.0</li>
                                </ul>

                                <p class="text-slate-400 italic">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                            </div>
                        </div>

                        <div class="mt-8">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img src="assets/images/client/04.jpg" class="h-11 w-11 rounded-full shadow" alt="">

                                    <div class="ms-3 flex-1">
                                        <a href="" class="text-lg font-semibold hover:text-orange-500 duration-500">Calvin Carlo</a>
                                        <p class="text-sm text-slate-400">6th May 2022 at 01:25 pm</p>
                                    </div>
                                </div>

                                <a href="" class="text-slate-400 hover:text-orange-500 duration-500 ms-5"><i class="mdi mdi-reply"></i> Reply</a>
                            </div>
                            <div class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-800 mt-6">
                                <ul class="list-none inline-block text-orange-400">
                                    <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                    <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                    <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                    <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                    <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                    <li class="inline text-slate-400 font-semibold">5.0</li>
                                </ul>

                                <p class="text-slate-400 italic">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                            </div>
                        </div>

                        <div class="p-6 rounded-md shadow dark:shadow-gray-800 mt-8">
                            <h5 class="text-lg font-semibold">Leave A Comment:</h5>

                            <form class="mt-8">
                                <div class="grid lg:grid-cols-12 lg:gap-6">
                                    <div class="lg:col-span-6 mb-5">
                                        <div class="text-start">
                                            <label for="name" class="font-semibold">Your Name:</label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="user" class="w-4 h-4 absolute top-3 start-4"></i>
                                                <input name="name" id="name" type="text" class="ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" placeholder="Name :">
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="lg:col-span-6 mb-5">
                                        <div class="text-start">
                                            <label for="email" class="font-semibold">Your Email:</label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="mail" class="w-4 h-4 absolute top-3 start-4"></i>
                                                <input name="email" id="email" type="email" class="ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" placeholder="Email :">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1">
                                    <div class="mb-5">
                                        <div class="text-start">
                                            <label for="comments" class="font-semibold">Your Comment:</label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="message-circle" class="w-4 h-4 absolute top-3 start-4"></i>
                                                <textarea name="comments" id="comments" class="ps-11 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" placeholder="Message :"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" id="submit" name="send" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-orange-500 text-white rounded-md w-full">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

   
</section><!--end section-->

@endsection
<header>
<!-- component -->
<nav class="bg-gray-800 px-4 sm:px-4 py-2.5 ">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
      <a href="/" class="flex items-center">
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">
          My store✨
        </span>
      </a>
  
      <div class="flex items-center">
        <button
          id="menu-toggle"
          type="button"
          class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden"
        >
          <span class="sr-only">Open main menu</span>
          <!-- Hamburger icon -->
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4 6h16M4 12h16m-7 6h7"
            />
          </svg>
        </button>
      </div>
  
      <div
        class="w-full md:block md:w-auto hidden"
        id="mobile-menu"
      >
        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
          <li>
            <a
              href="{{route('product')}}"
              class="block py-2 pr-4 pl-3 border-b-2 text-white border-pink-700 border-opacity-0 hover:border-opacity-100 hover:text-pink-700 duration-200 cursor-pointer"
              aria-current="page"
            >
              Home
            </a>
          </li>
          <li>
            <a
            href="{{route('panier.lister')}}"
            class="block py-2 pr-4 pl-3 border-b-2 text-white border-rose-600 border-opacity-0 hover:border-opacity-100 hover:text-rose-600 duration-200 cursor-pointer"  
            >
            Cart
          </a>
        </li>
        <li>
          <a
          href="{{route('favori.liste')}}"
          class="block py-2 pr-4 pl-3 border-b-2 text-white border-rose-600 border-opacity-0 hover:border-opacity-100 hover:text-rose-600 duration-200 cursor-pointer"  
        >
        Wishlist
        </a>
      </li>
      <li>
        <a
          href="{{route('dashboard')}}"
          class="block py-2 pr-4 pl-3 border-b-2 text-white border-rose-600 border-opacity-0 hover:border-opacity-100 hover:text-rose-600 duration-200 cursor-pointer" 
        >
        My account
        </a>
      </li>
      <li>
        
      </nav>

      



   </header>
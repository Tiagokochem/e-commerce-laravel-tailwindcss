<div class="p-1 bg-gray-100 border-blue-400 rounded-lg shadow-sm hover:border">
    <div>
        <img src="{{ asset('images/1.png') }}" class="object-cover rounded-t" height="400" width="400" alt="product-image">
    </div>

    <div>
        <h2 class="px-3 line-clamp-2">It is a creative hub where imagination meets craftsmanship to transtorm your ideas into tangible reality</h2>
        <div class="flex justify-between px-3 py-2">
            <div class="p-1 bg-green-200 rounded-md">
                <h2 class="text-1xl">Outfit</h2>
            </div>
                <h2 class="font-medium text-1xl">R$ 2.99</h2>

        </div>
        <div class="flex justify-center w-full gap-2 px-12 py-2 text-sm font-medium bg-blue-600 rounded shadow hover:bg-blue-700 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto">
           {{-- //svg --}}
           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
           
         
             <a 
            class=""
            href="{{auth()->check() ? '/add/to/cart' : '/auth/login'}}"
            >
            Add To Cart
            </a>
        </div>
    </div>
</div>

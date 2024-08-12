<div>
    <div class="flex gap-5 p-20">
        <img src="{{ '' ? Storage::url($product->image) : asset('images/placeholder-image.jpg') }}" alt="product-images" class="rounded-t-lg object-cover w-[300px] h-[280px]">
        <div>
            <h2 class="p-1 text-2xl font-medium line-clamp-2">{{'' }}</h2>
            <h2 class="p-1 text-gray-500 line-clamp-4">{{ '' }}</h2>
            <div class="flex gap-10">
                <div class="p-1 bg-green-200 rounded-md">
                    <h2 class="text-1xl ">{{  ''}}</h2>
                </div>
                <h2 class="text-2xl font-medium">${{ '' }}</h2>
            </div>
            <div class="my-3">
            @if (auth()->check())
            <button wire:click="addToCart({{)'' ">
                <div class="flex justify-center w-full gap-2 px-12 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded shadow hover:bg-blue-700 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg> 
                    <span>Add to cart</span>
                </div>
            </button>
            @else
                <a wire:navigate href='/auth/login'>
                    <div class="flex justify-center w-full gap-2 px-12 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded shadow hover:bg-blue-700 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg> 
                        <span>Add to cart</span>
                    </div>
                </a>
            @endif
            </div>
        </div>
    </div>
    <div class="px-20 pt-5 my-5">
        <h2 class="text-2xl font-medium">Related Products</h2>
        <livewire:product-listing :category_id="$product->category_id" :current_product_id="$product->id"/>
    </div>
</div>
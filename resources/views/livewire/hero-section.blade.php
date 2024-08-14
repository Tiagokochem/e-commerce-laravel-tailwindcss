<section class="bg-gray-50">
    <div class="max-w-screen-xl px-4 py-10 mx-auto lg:flex lg:items-center">
        <div class="max-w-xl mx-auto text-center">
            <h1 class="text-3xl font-extrabold sm:text-5xl">
                Online Marketplace.
                <strong class="text-3xl font-extrabold text-blue-700 sm:block"> Discovery Quality Products Online Now.
                </strong>
            </h1>

            <p class="mt-4 sm:text-xl/relaxed">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo tenetur fuga ducimus
                numquam ea!
            </p>

            <div class="flex flex-wrap justify-center gap-4 mt-8">

                @if (auth()->check())
                     <a class="block w-full px-12 py-3 text-sm font-medium text-white bg-blue-600 rounded shadow hover:bg-red-700 focus:outline-none focus:ring active:bg-red-500 sm:w-auto"
                        href="/offer">
                        Redeem your offer now
                    </a>
                @else
                    <a class="block w-full px-12 py-3 text-sm font-medium text-white bg-blue-600 rounded shadow hover:bg-red-700 focus:outline-none focus:ring active:bg-red-500 sm:w-auto"
                        href="auth/login">
                        Get Started
                    </a>
                @endif

                <a class="block w-full px-12 py-3 text-sm font-medium text-blue-600 rounded shadow hover:text-red-700 focus:outline-none focus:ring active:text-red-500 sm:w-auto"
                    href="#">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>

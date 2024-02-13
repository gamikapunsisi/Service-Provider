<!-- resources/views/welcome.blade.php -->

@extends('layouts.app')

@section('title', 'Welcome')



@section('content')
<div class="md:w-full">



    {{-- <section class="p-6 mb-6 bg-gray-200 rounded-lg"> --}}
        {{-- <section class="rounded-lg p-28 mb-30 opacity-8"
            style="background-image: url('{{ asset('/images/serviceImg.png') }}'); background-size: cover; background-position: center; backdrop-filter: blur(24px);">
            --}}
            <section class="relative p-28 mb-30" style="background-image: 
        linear-gradient(rgba(0, 0, 0, 0.45), rgba(255, 255, 255, 0.25)),
        url('{{ asset('/images/grayImage.png') }}'),
        url('{{ asset('/images/serviceImg.png') }}');
        background-size: cover; 
        background-position: center; 
        backdrop-filter: blur(24px);">
                <h2 class="mb-2 text-5xl text-white font-raleway">
                    Service Management
                    <br>
                    Solutions
                </h2>
                <br>
                <br>
                <p class="text-2xl text-white font-raleway font">
                    Service Management Solutions streamline service delivery through <br>
                    software or platforms. They enable efficient planning, scheduling, and <br>
                    performance monitoring, improving customer satisfaction and <br>
                    operational effectiveness across various industries
                </p>
                <br>
                <br>
                <div class="flex items-center font-raleway">
                    <button type="button"
                        class="focus:outline-none text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">
                        HIRE A PERSON
                    </button>
                    <button type="button"
                        class="focus:outline-none text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">
                        POST A JOB
                    </button>
                </div>
                <br>
                <br>
                {{-- <form action="/">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-black">
                        Search
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full p-4 pl-10 text-sm border border-gray-300 rounded-lg text-black-900 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="What are you looking for..." required>
                       
                    </div>
                </form> --}}
                <form action="" method="GET" class="flex items-center">
                    <input 
                        type="text" 
                        name="query" 
                        placeholder="Search" 
                        class="h-10 px-5 pr-10 text-sm rounded-full bg-gray-8 00 focus:outline-none">
                    <button type="submit" class="px-4 py-2 ml-2 text-white bg-blue-500 rounded-full">
                        Search
                    </button>
                </form>



            </section>

            <!-- Section Browse by Categories -->
            <section class="p-6 mb-6 rounded-lg">
                <h2 class="mb-2 text-2xl font-bold text-center text-blue-800"> Browse by Categories</h2>
                <p class="text-center text-gray-700"> Effortlessly explore and find services by categories, simplifying
                    your
                    search for specific offerings and service
                    <br>
                    providers that match your needs and preferences
                </p>

                <div class="grid justify-center grid-cols-1 gap-4 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1">

                    <!-- Row 1 -->
                    <div class="flex justify-center gap-4">

                        <a href="/category1"
                            class="flex flex-col justify-between w-full p-6 transition duration-300 transform rounded-lg bg-gradient-to-t from-gray-100 to-gray-100 hover:shadow-lg hover:scale-105 sm:w-1/2 md:w-1/4 lg:w-1/4">
                            <!-- Card content here -->
                            <div class="flex items-center justify-center">
                                <img class="w-10 mb-2 bg-yellow-500 rounded-full h- r-5" src="{{ asset('/images/audit.png') }}"
                                    alt="Image Alt Text">
                            </div>
                            <p class="text-center text-black">Account & Audit</p>
                            <div class="flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-black" fill="none"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </a>

                        <a href="/category2"
                            class="flex flex-col items-center justify-between w-full p-6 transition duration-300 transform rounded-lg bg-gradient-to-t from-gray-100 to-gray-100 hover:shadow-lg hover:scale-105 sm:w-1/2 md:w-1/4 lg:w-1/4">
                            <!-- Card content here -->
                            <div class="flex items-center justify-center">
                                <img class="w-10 mb-2 bg-yellow-500 rounded-full h- r-5" src="{{ asset('/images/moneyTruck.png') }}"
                                    alt="Image Alt Text">
                            </div>
                            <p class="text-center text-black">IT Services</p>
                            <div class="flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-black" fill="none"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </a>

                        <a href="/category3"
                            class="flex flex-col justify-between w-full p-6 transition duration-300 transform rounded-lg bg-gradient-to-t from-gray-100 to-gray-100 hover:shadow-lg hover:scale-105 sm:w-1/2 md:w-1/4 lg:w-1/4">
                            <!-- Card content here -->
                            <div class="flex items-center justify-center">
                                <img class="w-10 mb-2 bg-yellow-500 rounded-full h- r-5" src="{{ asset('/images/moneyTruck.png') }}"
                                    alt="Image Alt Text">
                            </div>
                            <p class="text-center text-black">Networking</p>
                            <div class="flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-black" fill="none"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </a>

                        <a href="/category4"
                            class="flex flex-col justify-between w-full p-6 transition duration-300 transform rounded-lg bg-gradient-to-t from-gray-100 to-gray-100 hover:shadow-lg hover:scale-105 sm:w-1/2 md:w-1/4 lg:w-1/4">
                            <!-- Card content here -->
                            <div class="flex items-center justify-center">
                                <img class="w-10 mb-2 bg-yellow-500 rounded-full h- r-5" src="{{ asset('/images/moneyTruck.png') }}"
                                    alt="Image Alt Text">
                            </div>
                            <p class="text-center text-black">Plumbing</p>
                            <div class="flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-black" fill="none"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </a>
                        <a href="/category5"
                        class="flex flex-col justify-between w-full p-6 transition duration-300 transform rounded-lg bg-gradient-to-t from-gray-100 to-gray-100 hover:shadow-lg hover:scale-105 sm:w-1/2 md:w-1/4 lg:w-1/4">
                        <!-- Card content here -->
                        <div class="flex items-center justify-center">
                            <img class="w-10 mb-2 bg-yellow-500 rounded-full h- r-5" src="{{ asset('/images/moneyTruck.png') }}"
                                alt="Image Alt Text">
                        </div>
                        <p class="text-center text-black">Plumbing</p>
                        <div class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-black" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </a>

                    </div>

                    <!-- Row 2 -->
                    <div class="flex justify-center gap-4">

                        <a href="/category6"
                            class="flex flex-col justify-between w-full p-6 transition duration-300 transform rounded-lg bg-gradient-to-t from-gray-100 to-gray-100 hover:shadow-lg hover:scale-105 sm:w-1/2 md:w-1/4 lg:w-1/4">
                            <!-- Card content here -->
                            <div class="flex items-center justify-center">
                                <img class="w-10 mb-2 bg-yellow-500 rounded-full h- r-5" src="{{ asset('/images/moneyTruck.png') }}"
                                    alt="Image Alt Text">
                            </div>
                            <p class="text-center text-black">Learning & Driver.</p>
                            <div class="flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-black" fill="none"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </a>

                        <a href="/category7"
                            class="flex flex-col justify-between w-full p-6 transition duration-300 transform rounded-lg bg-gradient-to-t from-gray-100 to-gray-100 hover:shadow-lg hover:scale-105 sm:w-1/2 md:w-1/4 lg:w-1/4">
                            <!-- Card content here -->
                            <div class="flex items-center justify-center">
                                <img class="w-10 mb-2 bg-yellow-500 rounded-full h- r-5" src="{{ asset('/images/moneyTruck.png') }}"
                                    alt="Image Alt Text">
                            </div>
                            <p class="text-center text-black">Law & Finance</p>
                            <div class="flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-black" fill="none"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </a>

                        <a href="/category8"
                            class="flex flex-col justify-between w-full p-6 transition duration-300 transform rounded-lg bg-gradient-to-t from-gray-100 to-gray-100 hover:shadow-lg hover:scale-105 sm:w-1/2 md:w-1/4 lg:w-1/4">
                            <!-- Card content here -->
                            <div class="flex items-center justify-center">
                                <img class="w-10 mb-2 bg-yellow-500 rounded-full h- r-5" src="{{ asset('/images/moneyTruck.png') }}"
                                    alt="Image Alt Text">
                            </div>
                            <p class="text-center text-black">Medical</p>
                            <div class="flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-black" fill="none"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </a>

                        <a href="/category9"
                            class="flex flex-col justify-between w-full p-6 transition duration-300 transform rounded-lg bg-gradient-to-t from-gray-100 to-gray-100 hover:shadow-lg hover:scale-105 sm:w-1/2 md:w-1/4 lg:w-1/4">
                            <!-- Card content here -->
                            <div class="flex items-center justify-center">
                                <img class="w-10 mb-2 bg-yellow-500 rounded-full h- r-5" src="{{ asset('/images/moneyTruck.png') }}"
                                    alt="Image Alt Text">
                            </div>
                            <p class="text-center text-black">Handyman Services</p>
                            <div class="flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-black" fill="none"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </a>
                        <a href="/category10"
                        class="flex flex-col justify-between w-full p-6 transition duration-300 transform rounded-lg bg-gradient-to-t from-gray-100 to-gray-100 hover:shadow-lg hover:scale-105 sm:w-1/2 md:w-1/4 lg:w-1/4">
                        <!-- Card content here -->
                        <div class="flex items-center justify-center">
                            <img class="w-10 mb-2 bg-yellow-500 rounded-full h- r-5" src="{{ asset('/images/moneyTruck.png') }}"
                                alt="Image Alt Text">
                        </div>
                        <p class="text-center text-black">Handyman Services</p>
                        <div class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-black" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </a>

                    </div>

                </div>
</div>

<div class="mt-8 text-center">
    <a href="/more-categories" class="text-blue-500 hover:underline">Click here to browse more categories</a>
</div>


</section>





{{-- <section class="grid grid-cols-1 gap-2 sm:grid-cols-2"> --}}
    <section class="justify-center grid grid-cols-1 gap-2 sm:grid-cols-2 w-[1200px]">



    <a href="/post-job"
        class="flex flex-col justify-between p-3 mr-6 transition duration-300 transform border border-red-400 rounded-lg bg-gradient-to-t from-gray-100 to-gray-100 hover:shadow-lg hover:scale-105">
        <div>
            <img class="w-6 mb-2 rounded-full h- r-5" src="{{ asset('/images/moneyTruck.png') }}" alt="Image Alt Text">
            <p class="font-bold text-blue-800">Start Making Money</p>
        </div>

        <div>
            <p class="text-black">Do you have something to provide? Post your first ad and start making
                money</p>
            <button class="px-10 py-2 mt-4 font-bold text-black bg-yellow-300 rounded-full hover:bg-yellow-500">Post
                Your
                Job</button>
        </div>
    </a>




    <!-- Card 2: Explore More Jobs -->
    <a href="/explore-jobs"
        class="flex flex-col justify-between p-3 ml-6 transition duration-300 transform rounded-lg bg-gradient-to-t from-gray-100 to-gray-100 hover:shadow-lg hover:scale-105">
        <div>
            <img class="w-6 mb-2 rounded-full h- r-5" src="{{ asset('/images/moneyTruck.png') }}" alt="Image Alt Text">
            <p class="font-bold text-blue-800">Start Making Money</p>
        </div>

        <div>
            <p class="text-black">Do you have something to provide? Post your first ad and start making
                money</p>
            <button class="px-10 py-2 mt-4 font-bold text-black bg-blue-300 rounded-full hover:bg-blue-500">Post
                Your
                Job</button>
        </div>
    </a>

</section>




<!-- Section 4 -->
<section class="gap-4 p-6 mb-6 rounded-lg ">
    <h2 class="mb-2 text-2xl font-bold text-center text-blue-800">Top Service Providers</h2>
    <p class="text-center text-gray-700">Effortlessly explore and find services by categories, simplifying
        your search for specific offerings and service
        providers that match your needs and preferences</p>

       
<div class="container flex justify-center mx-auto mt-8">
    <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">
        <!-- Feedback Card 1 -->
      
        <div class="p-4 bg-white rounded shadow-md">
            <img src="{{ asset('images/sizebar.png') }}" alt="Feedback Image" class="w-full mb-4 rounded-md">
            <div class="flex items-center mb-4">
                <img src="{{ asset('images/gamika.png') }}" alt="Profile Image" class="w-8 h-8 mr-2 rounded-full">
                <h2 class="text-lg font-semibold">Gamika Punsisi</h2>
            </div>
            <h2 class="mb-2 text-lg font-semibold">Place where we care life</h2>
            <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit....</p>
        </div>
        

        <!-- Feedback Card 2 -->
        <div class="p-4 bg-white rounded shadow-md">
            <img src="{{ asset('images/sizebar.png') }}" alt="Feedback Image" class="w-full mb-4 rounded-md">
            <div class="flex items-center mb-4">
                <img src="{{ asset('images/gamika.png') }}" alt="Profile Image" class="w-8 h-8 mr-2 rounded-full">
                <h2 class="text-lg font-semibold">Gamika Punsisi</h2>
            </div>
            <h2 class="mb-2 text-lg font-semibold">Place where we care life</h2>
            <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit....</p>
        </div>

        <!-- Feedback Card 3 -->
        <div class="p-4 bg-white rounded shadow-md">
            <img src="{{ asset('images/sizebar.png') }}" alt="Feedback Image" class="w-full mb-4 rounded-md">
            <div class="flex items-center mb-4">
                <img src="{{ asset('images/gamika.png') }}" alt="Profile Image" class="w-8 h-8 mr-2 rounded-full">
                <h2 class="text-lg font-semibold">Gamika Punsisi</h2>
            </div>
            <h2 class="mb-2 text-lg font-semibold">Place where we care life</h2>
            <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit....</p>
        </div>

        <!-- Feedback Card 4 -->
        <div class="p-4 bg-white rounded shadow-md">
            <img src="{{ asset('images/sizebar.png') }}" alt="Feedback Image" class="w-full mb-4 rounded-md">
            <div class="flex items-center mb-4">
                <img src="{{ asset('images/gamika.png') }}" alt="Profile Image" class="w-8 h-8 mr-2 rounded-full">
                <h2 class="text-lg font-semibold">Gamika Punsisi</h2>
            </div>
            <h2 class="mb-2 text-lg font-semibold">Place where we care life</h2>
            <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit....</p>
        </div>
    </div>
</div>

</section>

<!-- Section 5 -->
<section class="p-6 bg-blue-900">
    {{-- <h2 class="mb-2 text-2xl font-bold text-yellow-400">The best part? Everything.</h2> --}}
    {{-- <p class="text-gray-700">Reach out to our team for any questions or inquiries.</p> --}}

    <div class="container flex p-8 mx-auto">
        <div class="flex-1">
            <h1 class="mb-6 text-4xl font-bold text-yellow-500">The best part? Everything.</h1>

            <div class="p-6 mb-8 text-white rounded-lg shadow-md">
                {{-- <p class="mb-4 text-lg">This is a simple example demonstrating Laravel and Tailwind CSS integration.</p> --}}

                <ul class="ml-6 list-disc">
                    <li class="mb-4">
                        <strong>Stick to your budget</strong>
                        <p class="text-white-300">Find the right service for every price point. No hourly rates, just project-based pricing.</p>
                    </li>
                    <li class="mb-4">
                        <strong>Get quality work done quickly</strong>
                        <p class="text-white-300">Hand your project over to a talented freelancer in minutes, get long-lasting results.</p>
                    </li>
                    <li class="mb-4">
                        <strong>Pay when you're happy</strong>
                        <p class="text-white-300">Upfront quotes mean no surprises. Payments only get released when you approve.</p>
                    </li>
                    <li class="mb-4">
                        <strong>Component-Based Development</strong>
                        <p class="text-white-300">Tailwind CSS's component-based approach aligns well with Laravel's Blade components, resulting in a modular and maintainable codebase.</p>
                    </li>
                    <li class="mb-4">
                        <strong>Count on 24/7 support</strong>
                        <p class="text-white-300">Our round-the-clock support team is available to help anytime, anywhere.</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="flex-1 ml-8">
            <img src="{{ asset('images/bepart.png') }}" alt="Example Image" class="w-full rounded-sm shadow-md">
        </div>
    </div>
</section>

<section class="p-6 bg-white">
    <div class="container flex p-8 mx-auto">

        <div class="flex-1">
            <h1 class="mb-6 text-4xl font-bold text-center text-blue-800">Your Guide to Finding the Right Service Provider
                 in 
                 <br>
                 Our Service-Oriented System</h1>
                 

                
                  
                  {{-- <div class="flex items-center justify-center h-24">
                    <span class="ml-4 text-yellow-500">
                        <i class="fas fa-search"></i>
                    </span>
                    <input type="text" id="searchInput" placeholder="What are you looking for?..." class="px-4 py-2 text-gray-800 bg-gray-700 rounded-full w-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300" onkeydown="if (event.key === 'Enter') searchFunction()">
                </div> --}}
                
                <div class="flex items-center justify-center border border-red-500 h-26">
                    <span class="ml-4 text-yellow-500">
                        <!-- SVG icon, you can customize the icon or replace it -->
                        <svg class="z-20 -mr-12 border border-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-4a8 8 0 1 0-16 0 8 8 0 0 0 16 0z"/>
                        </svg>
                    </span>
                    <input type="text" id="searchInput" placeholder="What are you looking for?..." class="w-4/12 px-10 py-2 text-gray-800 rounded-full focus:outline-none focus:shadow-outline-blue focus:border-blue-300" onkeydown="if (event.key === 'Enter') searchFunction()">
                </div>

                    

                
                
                                
                  
        </div>
    </div>
    
    
</section>
</div>


<script>
    function searchFunction() {
        // You can add your search functionality here
        var searchQuery = document.getElementById('searchInput').value;
        alert('Searching for: ' + searchQuery);
        // Add your logic to handle the search query
    }
</script>
@endsection
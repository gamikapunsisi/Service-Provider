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
                <h2 class="mb-2 text-2xl font-bold text-center"> Browse by Categories</h2>
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
                                <img class="w-10 mb-2 rounded-full h- r-5" src="{{ asset('/images/moneyTruck.png') }}"
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
                                <img class="w-10 mb-2 rounded-full h- r-5" src="{{ asset('/images/moneyTruck.png') }}"
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
                                <img class="w-10 mb-2 rounded-full h- r-5" src="{{ asset('/images/moneyTruck.png') }}"
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
                                <img class="w-10 mb-2 rounded-full h- r-5" src="{{ asset('/images/moneyTruck.png') }}"
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

                        <a href="/category5"
                            class="flex flex-col justify-between w-full p-6 transition duration-300 transform rounded-lg bg-gradient-to-t from-gray-100 to-gray-100 hover:shadow-lg hover:scale-105 sm:w-1/2 md:w-1/4 lg:w-1/4">
                            <!-- Card content here -->
                            <div class="flex items-center justify-center">
                                <img class="w-10 mb-2 rounded-full h- r-5" src="{{ asset('/images/moneyTruck.png') }}"
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

                        <a href="/category6"
                            class="flex flex-col justify-between w-full p-6 transition duration-300 transform rounded-lg bg-gradient-to-t from-gray-100 to-gray-100 hover:shadow-lg hover:scale-105 sm:w-1/2 md:w-1/4 lg:w-1/4">
                            <!-- Card content here -->
                            <div class="flex items-center justify-center">
                                <img class="w-10 mb-2 rounded-full h- r-5" src="{{ asset('/images/moneyTruck.png') }}"
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

                        <a href="/category7"
                            class="flex flex-col justify-between w-full p-6 transition duration-300 transform rounded-lg bg-gradient-to-t from-gray-100 to-gray-100 hover:shadow-lg hover:scale-105 sm:w-1/2 md:w-1/4 lg:w-1/4">
                            <!-- Card content here -->
                            <div class="flex items-center justify-center">
                                <img class="w-10 mb-2 rounded-full h- r-5" src="{{ asset('/images/moneyTruck.png') }}"
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

                        <a href="/category8"
                            class="flex flex-col justify-between w-full p-6 transition duration-300 transform rounded-lg bg-gradient-to-t from-gray-100 to-gray-100 hover:shadow-lg hover:scale-105 sm:w-1/2 md:w-1/4 lg:w-1/4">
                            <!-- Card content here -->
                            <div class="flex items-center justify-center">
                                <img class="w-10 mb-2 rounded-full h- r-5" src="{{ asset('/images/moneyTruck.png') }}"
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

<div class="gap-4 mt-8 text-center">
    <a href="/more-categories" class="text-blue-500 hover:underline">Click here to browse more
        categories</a>
</div>


</section>





<section class="grid grid-cols-1 gap-2 sm:grid-cols-2">


    <a href="/post-job"
        class="flex flex-col justify-between p-3 mr-6 transition duration-300 transform border border-red-400 rounded-lg bg-gradient-to-t from-gray-100 to-gray-100 hover:shadow-lg hover:scale-105">
        <!-- Content for the first row -->
        <div>
            <img class="w-6 mb-2 rounded-full h- r-5" src="{{ asset('/images/moneyTruck.png') }}" alt="Image Alt Text">
            <p class="text-blue">Start Making Money</p>
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
        <svg class="w-8 h-8 mb-2 text-white" fill="none" stroke="currentColor" stroke-linecap="round"
            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
            <path d="M21 12H12m-9 0H3m0 0V4m0 8h18m-3-3l3-3-3-3"></path>
        </svg>
        <p class="text-blue">Explore More Jobs</p>
        <p class="text-black">Do you have something to provide? Post your first ad and start making money
        </p>

        <button class="px-10 py-2 mt-4 font-bold text-black bg-blue-500 rounded-full hover:bg-blue-700">
            Explore More Jobs </button>

    </a>

</section>

<!-- Section 4 -->
<section class="gap-4 p-6 mb-6 rounded-lg ">
    <h2 class="mb-2 text-2xl font-bold text-center">Top Service Providers</h2>
    <p class="text-center text-gray-700">Effortlessly explore and find services by categories, simplifying
        your search for specific offerings and service
        providers that match your needs and preferences</p>
</section>

<!-- Section 5 -->
<section class="p-6 bg-gray-200 rounded-lg">
    <h2 class="mb-2 text-2xl font-bold">Contact Us</h2>
    <p class="text-gray-700">Reach out to our team for any questions or inquiries.</p>
</section>
</div>
@endsection
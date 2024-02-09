<!-- resources/views/welcome.blade.php -->

@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <div class="container mx-auto p-1">
        
        <section  class="bg-gray-200 p-6 rounded-lg mb-6">
            <h2 class="font-mono text-5xl text-black font mb-2">
                Service Management
                <br>
                Solutions
            </h2>
            <br>
            <br>
            <p class="font-sans text-2xl text-black font">
                Service Management Solutions streamline service delivery through <br>
                software or platforms. They enable efficient planning, scheduling, and <br>
                performance monitoring, improving customer satisfaction and <br>
                operational effectiveness across various industries
            </p>
            <br>
            <br>
            <div class="flex items-center">
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
            <form action="/">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">
                    Search
                </label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                           class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="What are you looking for..." required>
                    <button type="submit"
                            class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Search
                    </button>
                </div>
            </form>
        </section>

        <!-- Section 2 -->
        <section class="bg-gray-300 p-6 rounded-lg mb-6">
            <h2 class="text-2xl font-bold mb-2 text-center">  Browse by Categories</h2>
            <p class="text-gray-700 text-center"> Effortlessly explore and find services by categories, simplifying your search for specific offerings and service
                <br>
                providers that match your needs and preferences</p>
        </section>

      
          <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">

            <!-- Row 1 -->
            <a href="/category1" class="flex flex-col justify-between p-6 bg-gradient-to-t from-purple-600 to-purple-400 rounded-lg hover:shadow-lg transition duration-300 transform hover:scale-105">
                <svg class="w-8 h-8 text-white mb-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <!-- Replace this with your SVG content -->
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12H12m-9 0H3m0 0V4m0 8h18m-3-3l3-3-3-3"></path>
                </svg>
                <p class="text-white">Account & Audit</p>
            </a>

            <a href="/category2" class="flex flex-col justify-between p-6 bg-gradient-to-t from-blue-600 to-blue-400 rounded-lg hover:shadow-lg transition duration-300 transform hover:scale-105">
                <svg class="w-8 h-8 text-white mb-2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M21 12H12m-9 0H3m0 0V4m0 8h18m-3-3l3-3-3-3"></path>
                </svg>
                <p class="text-white">IT Services</p>
            </a>

            <a href="/category3" class="flex flex-col justify-between p-6 bg-gradient-to-t from-green-600 to-green-400 rounded-lg hover:shadow-lg transition duration-300 transform hover:scale-105">
                <svg class="w-8 h-8 text-white mb-2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M21 12H12m-9 0H3m0 0V4m0 8h18m-3-3l3-3-3-3"></path>
                </svg>
                <p class="text-white">Networking</p>
            </a>

            <a href="/category4" class="flex flex-col justify-between p-6 bg-gradient-to-t from-red-600 to-red-400 rounded-lg hover:shadow-lg transition duration-300 transform hover:scale-105">
                <svg class="w-8 h-8 text-white mb-2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M21 12H12m-9 0H3m0 0V4m0 8h18m-3-3l3-3-3-3"></path>
                </svg>
                <p class="text-white">Plumbling</p>
            </a>

        </section>

        <!-- Row 2 -->
        <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 mt-4">

            <a href="/category5" class="flex flex-col justify-between p-6 bg-gradient-to-t from-yellow-600 to-yellow-400 rounded-lg hover:shadow-lg transition duration-300 transform hover:scale-105">
                <svg class="w-8 h-8 text-white mb-2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M21 12H12m-9 0H3m0 0V4m0 8h18m-3-3l3-3-3-3"></path>
                </svg>
                <p class="text-white">Learning & Driver.</p>
            </a>

            <a href="/category6" class="flex flex-col justify-between p-6 bg-gradient-to-t from-indigo-600 to-indigo-400 rounded-lg hover:shadow-lg transition duration-300 transform hover:scale-105">
                <svg class="w-8 h-8 text-white mb-2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M21 12H12m-9 0H3m0 0V4m0 8h18m-3-3l3-3-3-3"></path>
                </svg>
                <p class="text-white">Law & Finance</p>
            </a>

            <a href="/category7" class="flex flex-col justify-between p-6 bg-gradient-to-t from-indigo-600 to-indigo-400 rounded-lg hover:shadow-lg transition duration-300 transform hover:scale-105">
                <svg class="w-8 h-8 text-white mb-2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M21 12H12m-9 0H3m0 0V4m0 8h18m-3-3l3-3-3-3"></path>
                </svg>
                <p class="text-white">Medical</p>
            </a>

            <a href="/category8" class="flex flex-col justify-between p-6 bg-gradient-to-t from-purple-600 to-purple-400 rounded-lg hover:shadow-lg transition duration-300 transform hover:scale-105">
                <svg class="w-8 h-8 text-white mb-2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M21 12H12m-9 0H3m0 0V4m0 8h18m-3-3l3-3-3-3"></path>
                </svg>
                <p class="text-white">Handyman Services</p>
            </a>

            <!-- Add more cards for Row 2 as needed -->

        </section>

        <div class="text-center mt-8 gap-4">
            <a href="/more-categories" class="text-blue-500 hover:underline">Click here to browse more categories</a>
        </div>

       

        <section class="grid grid-cols-1 sm:grid-cols-2 gap-2">

            <!-- Card 1: Post Your Job -->
            {{-- <a href="/post-job" class="flex flex-col justify-between p-3 bg-gradient-to-t from-yellow-600 to-yellow-400 rounded-lg hover:shadow-lg transition duration-300 transform hover:scale-105">
                <svg class="w-8 h-8 text-white mb-2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M21 12H12m-9 0H3m0 0V4m0 8h18m-3-3l3-3-3-3"></path>
                </svg>
                <p class="text-white">Start Making Money</p>
                <p class="text-white">Do you have something to provide? Post your first ad and start making money</p>

                <button class="text-white bg-blue-500 hover:bg-blue-600 px-1 py-2 mt-2 rounded-full">Post Your Job</button>
            </a> --}}
            {{-- <a href="/post-job" class="flex flex-col justify-between p-3 bg-gradient-to-t from-yellow-600 to-yellow-400 rounded-lg hover:shadow-lg transition duration-300 transform hover:scale-105 mr-6">
                <img class="w-10 h-8 mb-2 rounded-full r-5" src="" alt="Image Alt Text">


                <p class="text-white border">Start Making Money</p>
                <p class="text-white">Do you have something to provide? Post your first ad and start making money</p>
               <div class="w-6/12">
                <button class="text-white bg-blue-500 hover:bg-blue-600 px-1 py-2 mt-2 rounded-full w-6/12">Post Your Job</button>
               </div>
            </a> --}}
            <a href="/post-job" class="flex flex-col justify-between p-3 bg-gradient-to-t from-yellow-600 to-yellow-400 rounded-lg hover:shadow-lg transition duration-300 transform hover:scale-105 mr-6 border border-red-400">
                <!-- Content for the first row -->
                <div>
                    <img class="w-10 h- mb-2 rounded-full r-5" src="{{ asset('/images/moneyTruck.png') }}" alt="Image Alt Text">
                    <p class="text-white">Start Making Money</p>
                </div>
            
                <!-- Content for the second row -->
                <div>
                    <p class="text-white">Do you have something to provide? Post your first ad and start making money</p>
                    <button class="text-white bg-blue-500 hover:bg-blue-600 px-10 py-2 mt-4 rounded-full">Post Your Job</button>
                </div>
            </a>
            
            
            

            <!-- Card 2: Explore More Jobs -->
            <a href="/explore-jobs" class="flex flex-col justify-between p-3 bg-gradient-to-t from-blue-600 to-blue-400 rounded-lg hover:shadow-lg transition duration-300 transform hover:scale-105 ml-6">
                <svg class="w-8 h-8 text-white mb-2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M21 12H12m-9 0H3m0 0V4m0 8h18m-3-3l3-3-3-3"></path>
                </svg>
                <p class="text-white">Explore More Jobs</p>
                <p class="text-white">Do you have something to provide? Post your first ad and start making money</p>

                <button class="bg-red-500 hover:bg-blue-700 text-white font-bold  px-10 py-2 mt-4 rounded-full"> Explore More Jobs  </button>

            </a>

        </section>

         <!-- Section 4 -->
         <section class="bg-gray-300 p-6 rounded-lg mb-6 gap-4">
            <h2 class="text-2xl font-bold mb-2 text-center">Top Service Providers</h2>
            <p class="text-gray-700">Read what our users have to say about their experience with our app.</p>
        </section>

        <!-- Section 5 -->
        <section class="bg-gray-200 p-6 rounded-lg">
            <h2 class="text-2xl font-bold mb-2">Contact Us</h2>
            <p class="text-gray-700">Reach out to our team for any questions or inquiries.</p>
        </section>
    </div>
@endsection

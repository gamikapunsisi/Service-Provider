<!-- resources/views/components/header.blade.php -->

<header class="p-4 bg-gray-800">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">

    <nav>
        <ul class="flex justify-end space-x-4">
            <li><a href="{{ route('welcome') }}" class="text-white">Home</a></li>
            <li><a href="{{ route('about') }}" class="text-white">About</a></li>
            <li><a href="{{ route('serviceprovider') }}" class="text-white">Service Provider</a></li>
            <li><a href="{{ route('vendor') }}" class="text-white">Vendors</a></li>
            <li><a href="{{ route('contact') }}" class="text-white">Contact</a></li>
            
            <button class="p-2 text-black bg-yellow-500 rounded">Login</button>

        </ul>

    </nav>
</header>


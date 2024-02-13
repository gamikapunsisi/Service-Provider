
@extends('layouts.app')

@section('title', 'contact')
@section('content')


<!-- resources/views/contact.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="bg-gray-200">
    <div class="container mx-auto mt-8">
        <form action="/contact" method="post">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="w-full p-2 mb-4 border" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="w-full p-2 mb-4 border" required>

            <label for="message">Message:</label>
            <textarea name="message" id="message" class="w-full p-2 mb-4 border" required></textarea>

            <button type="submit" class="px-4 py-2 text-white bg-blue-500">Submit</button>
        </form>
    </div>
</body>
</html>
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Cards</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800">Our Team</h1>
            <p class="text-gray-600">Meet our talented team members</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 justify-center">
            @foreach($profiles as $profile)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-500 hover:scale-105 mx-auto">
                    <img class="w-full h-48 object-cover" src="{{ asset('storage/' . $profile->image) }}" alt="{{ $profile->name }}">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold mb-2 text-gray-800">{{ $profile->name }}</h2>
                        <p class="text-gray-700 mb-4">{{ $profile->description }}</p>
                        <a href="#" class="text-indigo-500 hover:text-indigo-600 font-semibold">View Profile</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
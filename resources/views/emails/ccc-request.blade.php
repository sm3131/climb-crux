<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email Template</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 p-4">
    <div class="max-w-md mx-auto bg-white rounded p-6 shadow-md">
        <h2 class="text-2xl mb-4">Climb Crux Conquer Inquiry</h2>
        
        <p><span class="font-semibold">Name:</span> {{ $name }}</p>
        
        <p class="mt-2"><span class="font-semibold">Email:</span> {{ $email }}</p>
        
        <p class="mt-2"><span class="font-semibold">Message:</span> {{ $messageContent }}</p>
    </div>
</body>
</html>
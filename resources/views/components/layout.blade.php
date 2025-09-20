<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Site</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-gray-900 text-white p-4 flex justify-center">
        <div class="hidden md:block"> 
    <div class="ml-10 flex items-baseline space-x-4"> 
        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link> 
        <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
        
    </div> 
</div> 
         
    </nav>
    {{ $heading }}
    {{ $slot }}
</body>
</html>
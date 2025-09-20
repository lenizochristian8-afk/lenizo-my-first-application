<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Tailwind CSS Layout</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

  <nav class="bg-white shadow-lg">
    <div class="container mx-auto px-6 py-3 flex justify-between items-center">
      <a href="#" class="text-xl font-bold text-gray-800">My Website</a>
      <div class="flex space-x-4">
        <a href="#" class="text-gray-600 hover:text-blue-500 transition-colors duration-300">Home</a>
        <a href="#" class="text-gray-600 hover:text-blue-500 transition-colors duration-300">About</a>
        <a href="#" class="text-gray-600 hover:text-blue-500 transition-colors duration-300">Contact</a>
      </div>
    </div>
  </nav>

  <main class="container mx-auto px-6 py-8">
    <div class="bg-white p-6 rounded-lg shadow-lg">
      <h1 class="text-3xl font-bold text-gray-800 mb-4">

        {{ $heading  }}
      </h1>
     

        
    </div>
    {{ $slot }}
  </main>

 

</body>
</html>
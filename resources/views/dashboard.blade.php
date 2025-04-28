<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Dashboard - Rental Kendaraan</title>
   <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

   <!-- Navbar -->
   <nav class="bg-blue-600 text-white px-6 py-4 shadow">
       <div class="container mx-auto flex justify-between items-center">
           <h1 class="text-2xl font-bold">Dashboard Rental Kendaraan</h1>
           <a href="/login" class="text-sm underline hover:text-gray-200">Logout</a>
       </div>
   </nav>

   <!-- Main Content -->
   <main class="flex-1 container mx-auto p-6">
       <!-- Ringkasan -->
       <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
           <div class="bg-white p-6 rounded-lg shadow text-center">
               <h3 class="text-lg text-gray-600">Total Kendaraan</h3>
               <p class="text-3xl font-bold text-blue-600">20</p>
           </div>
           <div class="bg-white p-6 rounded-lg shadow text-center">
               <h3 class="text-lg text-gray-600">Tersedia</h3>
               <p class="text-3xl font-bold text-green-600">15</p>
           </div>
       </div>
   </main>
</body>
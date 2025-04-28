<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rental Kendaraan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
</head>
<body class="bg-blue-100 p-8 text-center">
    <h1 class="text-3xl font-bold text-red-600 mb-6">Ini Rental Kendaraan</h1>
    <div class="flex justify-center gap-6">
        <img src="{{ asset('images/motor.jpeg') }}" alt="Komputer 1" class="w-96 h-auto rounded shadow">
        <img src="{{ asset('images/lamborghini.jpeg') }}" alt="Komputer 2" class="w-[400px] h-auto rounded shadow">
    </div>
</body>
</html>

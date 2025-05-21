<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-4">

<div class="ml-10 mt-20">
    <table class="w-full border-collapse bg-white shadow-lg rounded-lg overflow-hidden">
        <thead>
            <tr class="bg-orange-500 text-white">
                <th class="px-4 py-2 text-left">No</th>
                <th class="px-4 py-2 text-left">Nama Produk</th>
                <th class="px-4 py-2 text-left">Deskripsi</th>
                <th class="px-4 py-2 text-right">Harga Produk</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nama as $index => $item)
            <tr class="border-b hover:bg-gray-100">
                <td class="px-4 py-2">{{ $index + 1 }}</td>
                <td class="px-4 py-2 font-medium">{{ $item }}</td>
                <td class="px-4 py-2">{{ $desc[$index] }}</td>
                <td class="px-4 py-2 text-right">{{ $harga[$index] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow">
        <h1 class="text-xl font-bold mb-4 text-orange-600">Edit Produk</h1>
        <form action="{{ route('produk.update', $produk->id) }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nama" class="block mb-1 font-semibold">Nama Produk:</label>
                <input type="text" id="nama" name="nama" value="{{ $produk->nama }}"
                    class="w-full border border-gray-300 rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="block mb-1 font-semibold">Deskripsi:</label>
                <textarea id="deskripsi" name="deskripsi" rows="4"
                    class="w-full border border-gray-300 rounded px-3 py-2" required>{{ $produk->deskripsi }}</textarea>
            </div>
            <div class="mb-4">
                <label for="harga" class="block mb-1 font-semibold">Harga:</label>
                <input type="number" id="harga" name="harga" value="{{ $produk->harga }}"
                    class="w-full border border-gray-300 rounded px-3 py-2" required>
            </div>
            <div class="flex justify-end">
                <a href="{{ route('produk.list') }}"
                    class="mr-2 bg-gray-300 hover:bg-gray-400 text-black px-4 py-2 rounded">Batal</a>
                <button type="submit"
                    class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded font-semibold shadow">
                    Update
                </button>
            </div>
        </form>
    </div>
</body>
</html>
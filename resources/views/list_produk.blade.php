<div> 
    <h1 class="text-xl font-semibold mb-4">Input Produk</h1>
</div>
<form method="POST" action="{{ route('produk.simpan') }}">
    @csrf
    <table class="table">
        <tr>
            <td class="pr-4">Nama:</td>
            <td colspan="3">
                <input type="text" class="border border-gray-300 rounded px-3 py-2 w-full" id="nama" name="nama" required>
            </td>
        </tr>
        <tr>
            <td class="pr-4 pt-4 align-top">Deskripsi:</td>
            <td colspan="3">
                <textarea class="border border-gray-300 rounded px-3 py-2 w-full" id="deskripsi" name="deskripsi" required></textarea>
            </td>
        </tr>
        <tr>
            <td class="pr-4 pt-4">Harga:</td>
            <td>
                <input type="number" class="border border-gray-300 rounded px-3 py-2 w-full" id="harga" name="harga" required>
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td class="pt-4">
                <button type="submit" class="bg-orange-500 hover:bg-orange-500 text-white font-semibold py-2 px-4 rounded shadow transition duration-300">
                    Simpan
                </button>
            </td>
        </tr>
    </table>
</form>


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
                <th class="px-4 py-2 text-right">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produk as $index => $item)
            <tr>
                <td class="px-4 py-2">{{ $index + 1 }}</td>
                <td class="px-4 py-2">{{ $item->nama }}</td>
                <td class="px-4 py-2">{{ $item->deskripsi }}</td>
                <td class="px-4 py-2 text-right">Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                <td class="px-4 py-2 text-right">
                    <a href="{{ route('produk.edit', $item->id) }}" class="text-blue-600 hover:underline mr-2">Edit</a>
                    <form action="{{ route('produk.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin hapus produk ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
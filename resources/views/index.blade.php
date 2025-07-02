<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aplikasi Manajemen Data Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans text-gray-800">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-4 text-center">Aplikasi Manajemen Data Buku</h1>

        <nav class="mb-6 bg-white shadow rounded p-4">
            <ul class="flex space-x-4 justify-center">
                <li><a href="/kategori" class="text-blue-600 hover:underline">Kategori</a></li>
                <li><a href="/penerbit" class="text-blue-600 hover:underline">Penerbit</a></li>
                <li><a href="/buku" class="text-blue-600 hover:underline">Buku</a></li>
            </ul>
        </nav>

        <div class="bg-white rounded shadow p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold">Kategori</h3>
                <a href="{{ route('kategori.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Tambah</a>
            </div>

            <table class="w-full text-left border border-gray-300">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 border-b">No.</th>
                        <th class="px-4 py-2 border-b">Nama Kategori</th>
                        <th class="px-4 py-2 border-b">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Tambahkan data dinamis di sini -->
                </tbody>
            </table>
        </div>

        <footer class="mt-10 text-center text-sm text-gray-500">
            &copy; 2023 Ahmad Rafi Lucian
        </footer>
    </div>
</body>
</html>

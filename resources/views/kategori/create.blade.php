@include('layout.header')
        <div class="bg-white rounded shadow p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold">Kategori</h3>
                <a href="{{ route('kategori.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Tambah</a>
            </div>
        </div>
    </div>
     @include('layout.footer')

 

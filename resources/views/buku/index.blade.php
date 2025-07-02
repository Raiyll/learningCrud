@include('layout.header')
        <div class="bg-white rounded shadow p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold">Buku</h3>
                <a href="{{ route('buku.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Tambah</a>
            </div>

            <table class="w-full text-left border border-gray-300">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 border-b">No.</th>
                        <th class="px-4 py-2 border-b">Judul Buku</th>
                        <th class="px-4 py-2 border-b">Pengarang</th>
                        <th class="px-4 py-2 border-b">Tahun</th>
                        <th class="px-4 py-2 border-b">Penerbit</th>
                        <th class="px-4 py-2 border-b">Kategori</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allbuku as $key => $r )
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $r->judul }}</td>
                        <td>{{ $r->pengarang }}</td>
                        <td>{{ $r->tahun_terbit }}</td>
                        <td>{{ $r->penerbit->nama_penerbit }}</td>
                        <td>{{ $r->kategori->nama_kategori }}</td>            
                        <td>
                        <form action="{{ route('buku.destroy', $r->id) }}" method="POST" class="flex gap-2">
                            <a href="{{ route('buku.show', $r->id) }}" class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600 text-sm">Detail</a>
                            <a href="{{ route('buku.edit', $r->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 text-sm">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin hapus data ini?')" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 text-sm">Hapus</button>
                        </form>
                    </td>

                    </tr>
                    
                    @endforeach
                    <!-- Tambahkan data dinamis di sini -->
                </tbody>
            </table>
        </div>
    </div>
     @include('layout.footer')

 

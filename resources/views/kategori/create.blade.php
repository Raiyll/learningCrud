@include('layout.header')
     <h3>Buat Kategori</h3> 
     <form action="{{ route('kategori.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Nama Kategori:</label>
            <input type="text" name="nama_kategori" id="" placeholder="Masukkan nama kategori">
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
     </form>
     @include('layout.footer')

 

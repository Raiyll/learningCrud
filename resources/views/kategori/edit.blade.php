@include('layout.header')
     <h3>Edit Kategori</h3> 
     <form action="{{ route('kategori.update', $kategori ->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Nama Kategori:</label>
            <input type="text" name="nama_kategori" id="" value="{{ $kategori->nama_kategori }}">
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
     </form>
     @include('layout.footer')

 

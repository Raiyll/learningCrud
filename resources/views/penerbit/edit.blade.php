@include('layout.header')
     <h3>Edit Penerbit</h3> 
     <form action="{{ route('penerbit.update', $penerbit ->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Nama Penerbit:</label>
            <input type="text" name="nama_penerbit" id="" value="{{ $penerbit->nama_penerbit }}">
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
     </form>
     @include('layout.footer')

 

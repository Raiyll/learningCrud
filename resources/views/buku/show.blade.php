@include('layout.header')
        <div class="bg-white rounded shadow p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold">Detail Buku</h3>
            </div>
            <table class="w-full text-left border border-gray-300">
                <tbody>
                    <tr>
                        <td width="150px">Judul Buku</td>
                        <td width="2px">:</td>
                        <td>{{ $buku->judul }}</td>
                    </tr>
                    <tr>
                        <td>Pengarang</td>
                        <td>:</td>
                        <td>{{ $buku->pengarang }}</td>
                    </tr>
                    <tr>
                        <td>Tahun Terbit</td>
                        <td>:</td>
                        <td>{{ $buku->tahun_terbit }}</td>
                    </tr>
                    <tr>
                        <td>Penerbit</td>
                        <td>:</td>
                        <td>{{ $buku->penerbit->nama_penerbit }}</td>
                    </tr>
                    <tr>
                        <td>Kategori</td>
                        <td>:</td>
                        <td>{{ $buku->kategori->nama_kategori }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
     @include('layout.footer')

 

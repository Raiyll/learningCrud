@include('layout.header')
        <div class="bg-white rounded shadow p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold">Detail Penerbit</h3>
            </div>
            <table class="w-full text-left border border-gray-300">
                <tbody>
                    <tr>
                        <td width="150px">Nama Penerbit</td>
                        <td width="2px">:</td>
                        <td>{{ $penerbit->nama_penerbit }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
     @include('layout.footer')

 

<html>
    <head>
        <title>Menampilkan Pesanan</title>
    </head>
<body>
    <center><h2>Data Pesanan</h2>
    <table border=1>
        <th>Id Pesanan</th>
        <th>Nama Pelanggan</th>
        <th>Nama Barang</th>
        <th>Qty</th>
        <th>Tanggal Pesan</th>
            <tr>
            @foreach($data as $data2)
            <td>{{ $data2['id']}} </td>
            <td>{{ $data2['nama_pelanggan']}} </td>
            <td>{{ $data2['nama_barang']}} </td>
            <td>{{ $data2['qty']}}</td>
            <td>{{ $data2['tgl_Pesan']}}</td>
            </tr>
            @endforeach
    </table>
    </center>
</body>
</html>

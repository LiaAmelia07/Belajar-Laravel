<html>
    <head>
        <title>Menampilkan Pembelian</title>
    </head>
<body>
    <center><h2>Data Pembelian</h2>
    <table border=1>
        <th>Id Pembelian</th>
        <th>Nama Barang</th>
        <th>Nama Suplier</th>
        <th>Qty</th>
        <th>Tanggal Beli</th>
            <tr>
            @foreach($data as $data2)
            <td>{{ $data2['id']}} </td>
            <td>{{ $data2['nama_barang']}} </td>
            <td>{{ $data2['nama_suplier']}} </td>
            <td>{{ $data2['qty']}}</td>
            <td>{{ $data2['tgl_beli']}}</td>
            </tr>
            @endforeach
    </table>
    </center>
</body>
</html>

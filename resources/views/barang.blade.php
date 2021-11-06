<html>
    <head>
        <title>Menampilkan Barang</title>
    </head>
<body>
    <center><h2>Data Barang</h2>
        <table border=1>
        <th>Id_Barang</th>
        <th>Nama</th>
        <th>Varian</th>
        <th>Harga Beli</th>
        <th>Harga Jual</th>
        <tr>
            @foreach($brg as $data2)
            <td>{{ $data2['id']}}</td>
            <td>{{ $data2['nama']}}</td>
            <td>{{ $data2['varian']}}</td>
            <td>{{ $data2['harga_beli']}}</td>
            <td>{{ $data2['harga_jual']}}</td>
        </tr>
            @endforeach
        </table>
    </center>
</body>
</html>

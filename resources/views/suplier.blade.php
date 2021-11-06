<html>
    <head>
        <title>Menampilkan Suplier</title>
    </head>
<body>
    <center><h2>Data Suplier</h2>
    <table border=1>
        <th>Id Suplier</th>
        <th>Nama Suplier</th>
        <th>Alamat</th>
        <th>Kode Pos</th>
        <th>Kota</th>
            <tr>
            @foreach($data as $data2)
            <td>{{ $data2['id']}} </td>
            <td>{{ $data2['nama']}} </td>
            <td>{{ $data2['alamat']}} </td>
            <td>{{ $data2['kode_pos']}}</td>
            <td>{{ $data2['kota']}}</td>
            </tr>
            @endforeach
    </table>
    </center>
</body>
</html>


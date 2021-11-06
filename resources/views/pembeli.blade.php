<html>
    <head>
        <title>Menampilkan Pembeli</title>
    </head>
<body>
    <center><h2>Data Pembeli</h2>
    <table border=1>
        <th>Id_Pembeli</th>
        <th>Nama Pembeli</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Kota Pos</th>
        <th>Kota</th>
        <th>Tanggal Lahir</th>
        <tr>
            @foreach($data as $data2)
            <td>{{ $data2['id']}}</td>
            <td>{{ $data2['nama']}}</td>
            <td>{{ $data2['jns_kelamin']}}</td>
            <td>{{ $data2['alamat']}}</td>
            <td>{{ $data2['kode_pos']}}</td>
            <td>{{ $data2['kota']}}</td>
            <td>{{ $data2['tgl_lahir']}}</td>
        </tr>
            @endforeach
        </table>
    </center>
</body>
</html>

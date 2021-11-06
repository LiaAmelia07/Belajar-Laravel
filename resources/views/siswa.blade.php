<html>

    <head>
        <title>Data Diri</title>
    </head>

    <body>
        <h3>Menampilkan data</h3>
        <ul>
            @foreach($siswas as $siswas2)
            Id      : {{ $siswas2['id'] }} <br>
            Nama    : {{ $siswas2['nama']    }} <br>
            username: {{ $siswas2['username']  }} <br>
            email   : {{ $siswas2['email']  }} <br>
            alamat  : {{ $siswas2['alamat']  }} <br>
            mapel :
                @foreach($siswas2['mapel'] as $mapel)
                    <ul>
                    <li>{{$mapel['mapel']}}</li>
                    </ul>
                @endforeach
            @endforeach
        </ul>
        </h3>
    </body>
</html>

<html>
    <head>
        <title>Document</title>
    </head>
<body>
    <h2>Tampilkan Data Post</h2>
    @foreach($query as $data)
        Id      : {{ $data['id']}} <br>
        Title   : {{ $data['title']}} <br>
        Content : {{ $data['content']}} <br>
        <br>
    @endforeach
</body>
</html>

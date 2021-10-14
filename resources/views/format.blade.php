<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @foreach ($data as $format)
    id : {{ $format['id'] }} <br>
Name : {{ $format['name'] }} <br>
Usename : {{ $format ['username'] }} <br>
Email : {{ $format['email'] }} <br>
Alamat : {{ $format['alamat'] }} <br>
mata pelajaran :
    @foreach($format['mapel'] as $mapel)
    <li>{{$mapel}}</li>
@endforeach

<hr>
    @endforeach
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('index')}}" method="get">
    <input type="text" name="name" placeholder="name">
    <input type="text" name="price" placeholder="price">
    <button type="submit">поиск</button>
</form>

@foreach($tasks as $task)
    <hr>
    {{$task->name}}<br>
    {{$task->price}}<br>
    <hr>
@endforeach
</body>
</html>

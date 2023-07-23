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

<h1>{{$task->title}}</h1>

<p><strong>Description: </strong>{{$task->description}}</p>
<p><strong>Deadline: </strong>{{$task->deadline}}</p>

<a href="{{route('tasks.edit', $task)}}">Edit</a>
<a href="{{route('tasks.index')}}">Back</a>

</body>
</html>

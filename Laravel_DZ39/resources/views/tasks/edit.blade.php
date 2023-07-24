<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}">
    <title>Document</title>
</head>
<body>

<h1 class="title">Edit Task</h1>

<form action="{{route('tasks.update', $task)}}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <lable>Title</lable>
        <input type="text" name="title" value="{{$task->title}}">
    </div>
    <div>
        <lable>Description</lable>
        <input type="text" name="description" value="{{$task->descrption}}">
    </div>
    <div>
        <lable>Deadline</lable>
        <input type="datetime-local" name="deadline" value="{{$task->deadline}}">
    </div>

    <button type="submit" class="save-btn">Save</button>
    <a class="cancel-btn" href="{{route('tasks.index')}}">Cancel</a>
</form>
</body>
</html>

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

<h1>Edit Task</h1>

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

    <button type="submit">Save</button>
</form>

<a href="{{route('tasks.index')}}">Cancel</a>

</body>
</html>

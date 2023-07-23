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

<h1>Add Task</h1>

<form action="{{route('tasks.store')}}" method="POST">
    @csrf
    <div>
        <lable>Title</lable>
        <input type="text" name="title">
    </div>
    <div>
        <lable>Description</lable>
        <input type="text" name="description">
    </div>
    <div>
        <lable>Deadline</lable>
        <input type="datetime-local" name="deadline">
    </div>
    <button type="submit">Save</button>
</form>

<a href="{{route('tasks.index')}}">Cancel</a>

</body>
</html>

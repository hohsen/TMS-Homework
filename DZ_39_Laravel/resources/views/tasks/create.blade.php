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

<h1 class="title">Add Task</h1>

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
    <button type="submit" class="save-btn">Save</button>
</form>

<a class="cancel-btn" href="{{route('tasks.index')}}">Cancel</a>

</body>
</html>

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

<h1 class="title">To Do List</h1>

<a class="add-task-btn" href="{{route('tasks.create')}}">Add task</a>

@if($tasks -> isEmpty())
    <p>No tasks at the moment</p>
@endif
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Deadline</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tasks as $task)
        <tr>
            <td>
                <a href="{{route('tasks.show', $task)}}">{{$task->title}}</a>
            </td>
            <td>{{$task->description}}</td>
            <td>{{$task->deadline}}</td>
            <td>
                <a class="edit-btn" href="{{route('tasks.edit', $task)}}">Edit</a>
            </td>
            <td>
                <form action="{{route('tasks.destroy', $task)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button
                        type="submit"
                        onclick="return confirm('Are you sure?')">
                        Delete task
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>

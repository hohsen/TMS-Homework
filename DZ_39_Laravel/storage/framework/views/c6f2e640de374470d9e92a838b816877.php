<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/style.css')); ?>">
    <title>Document</title>
</head>
<body>

<h1 class="title"><?php echo e($task->title); ?></h1>

<p><strong>Description: </strong><?php echo e($task->description); ?></p>
<p><strong>Deadline: </strong><?php echo e($task->deadline); ?></p>

<a class="edit-btn" href="<?php echo e(route('tasks.edit', $task)); ?>">Edit</a>
<a class="cancel-btn" href="<?php echo e(route('tasks.index')); ?>">Back</a>

</body>
</html>
<?php /**PATH E:\XAMPP\htdocs\Laravel_DZ39\resources\views/tasks/show.blade.php ENDPATH**/ ?>
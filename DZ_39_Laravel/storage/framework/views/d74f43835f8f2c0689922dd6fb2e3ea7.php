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

<h1 class="title">Edit Task</h1>

<form action="<?php echo e(route('tasks.update', $task)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <div>
        <lable>Title</lable>
        <input type="text" name="title" value="<?php echo e($task->title); ?>">
    </div>
    <div>
        <lable>Description</lable>
        <input type="text" name="description" value="<?php echo e($task->descrption); ?>">
    </div>
    <div>
        <lable>Deadline</lable>
        <input type="datetime-local" name="deadline" value="<?php echo e($task->deadline); ?>">
    </div>

    <button type="submit" class="save-btn">Save</button>
    <a class="cancel-btn" href="<?php echo e(route('tasks.index')); ?>">Cancel</a>
</form>
</body>
</html>
<?php /**PATH E:\XAMPP\htdocs\Laravel_DZ39\resources\views/tasks/edit.blade.php ENDPATH**/ ?>
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

<h1 class="title">Add Task</h1>

<form action="<?php echo e(route('tasks.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
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

<a class="cancel-btn" href="<?php echo e(route('tasks.index')); ?>">Cancel</a>

</body>
</html>
<?php /**PATH E:\XAMPP\htdocs\Laravel_DZ39\resources\views/tasks/create.blade.php ENDPATH**/ ?>
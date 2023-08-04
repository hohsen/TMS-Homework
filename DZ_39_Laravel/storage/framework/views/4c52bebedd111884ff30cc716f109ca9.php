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

<h1 class="title">To Do List</h1>

<a class="add-task-btn" href="<?php echo e(route('tasks.create')); ?>">Add task</a>

<?php if($tasks -> isEmpty()): ?>
    <p>No tasks at the moment</p>
<?php endif; ?>
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Deadline</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td>
                <a href="<?php echo e(route('tasks.show', $task)); ?>"><?php echo e($task->title); ?></a>
            </td>
            <td><?php echo e($task->description); ?></td>
            <td><?php echo e($task->deadline); ?></td>
            <td>
                <a class="edit-btn" href="<?php echo e(route('tasks.edit', $task)); ?>">Edit</a>
            </td>
            <td>
                <form action="<?php echo e(route('tasks.destroy', $task)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button
                        type="submit"
                        onclick="return confirm('Are you sure?')">
                        Delete task
                    </button>
                </form>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

</body>
</html>
<?php /**PATH E:\XAMPP\htdocs\Laravel_DZ39\resources\views/tasks/index.blade.php ENDPATH**/ ?>
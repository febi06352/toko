<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
<div class="container">
    <br/>
    <?php if(\Session::has('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e(\Session::get('success')); ?></p>
        </div><br/>
    <?php endif; ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>

        <?php $__currentLoopData = $item_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($items_category['id']); ?></td>
                <td><?php echo e($items_category['item_name']); ?></td>

                <td><a href="<?php echo e(action('ItemCategoryController@edit', $items_category['id'])); ?>"
                       class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="<?php echo e(action('ItemCategoryController@destroy', $items_category['id'])); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
</body>
</html>

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
            <th>Transaction</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>

        <?php $__currentLoopData = $Returns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Returns): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($Returns['id']); ?></td>
                <td><?php echo e($Returns['transaction_id']); ?></td>
                <td><?php echo e($Returns['total']); ?></td>
                <td><?php echo e($Returns['note']); ?></td>

                <td><a href="<?php echo e(action('TReturnController@edit', $Returns['id'])); ?>"
                       class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="<?php echo e(action('TReturnController@destroy', $Returns['id'])); ?>" method="post">
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

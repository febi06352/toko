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
            <th>Address</th>
            <th>Phone Number</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>

        <?php $__currentLoopData = $Suplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Supliers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($Supliers['id']); ?></td>
                <td><?php echo e($Supliers['name']); ?></td>
                <td><?php echo e($Supliers['address']); ?></td>
                <td><?php echo e($Supliers['phone']); ?></td>

                <td><a href="<?php echo e(action('SuplierController@edit', $Supliers['id'])); ?>"
                       class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="<?php echo e(action('SuplierController@destroy', $Supliers['id'])); ?>" method="post">
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

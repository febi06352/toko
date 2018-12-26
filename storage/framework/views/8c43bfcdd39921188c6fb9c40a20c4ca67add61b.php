<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD Tutorial With Example </title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
<div class="container">
    <h2>Edit A Form</h2><br/>
    <form method="post" action="<?php echo e(action('CustomerController@update', $id)); ?>">
        <?php echo csrf_field(); ?>
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="name">Name :</label>
                <input type="text" class="form-control" name="name" value="<?php echo e($Customer->name); ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="name">Address :</label>
                <input type="text" class="form-control" name="address" value="<?php echo e($Customer->address); ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="name">Phone Number :</label>
                <input type="text" class="form-control" name="phone" value="<?php echo e($Customer->phone); ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-top:60px">
                <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($pageTitle); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a href="<?php echo e(route('home')); ?>" class="navbar-brand mb-0 h1">
                <i class="bi-hexagon-fill me-2"></i> Data Master
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">
                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto">
                        <a href="<?php echo e(route('home')); ?>" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item col-2 col-md-auto">
                        <a href="<?php echo e(route('employees.index')); ?>" class="nav-link active">Employee List</a>
                    </li>
                </ul>
                <hr class="d-lg-none text-white-50">
                <a href="<?php echo e(route('profile')); ?>" class="btn btn-outline-light my-2 ms-md-auto">
                    <i class="bi-person-circle me-1"></i> My Profile
                </a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h4 class="mb-3"><?php echo e($pageTitle); ?></h4>
        <hr>
        <form action="<?php echo e(route('employees.update', ['employee' => $employee->employee_id])); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-3">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName"
                    value="<?php echo e($employee->firstname); ?>">
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="lastName"
                    value="<?php echo e($employee->lastname); ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo e($employee->email); ?>">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age" value="<?php echo e($employee->age); ?>">
            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Position</label>
                <select class="form-select" id="position" name="position">
                    <?php $__currentLoopData = $positions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $position): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($position->id); ?>"
                            <?php echo e($employee->position_id == $position->id ? 'selected' : ''); ?>><?php echo e($position->name); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>

</html>
<?php /**PATH C:\laravel\Modul10 Laravel Database\resources\views/employee/edit.blade.php ENDPATH**/ ?>
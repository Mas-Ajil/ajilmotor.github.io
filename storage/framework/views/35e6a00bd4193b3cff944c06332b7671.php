<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title); ?></title>
    
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="stylesheet" href="assets/vendors/boxicons/css/boxicons.min.css">
    
</head>
<body>

    <?php echo $__env->make('account.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container mt-4 " style="margin-left: 90px;" id="main-container">
    <?php echo $__env->yieldContent('container'); ?>
</div>

    
    <script src="assets/scripts/script.js"></script>
</body>

</html>



<?php /**PATH C:\xampp\htdocs\example-app\resources\views/account/layouts/main.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">

</head>
<body>
    <div>
        <form method="POST" action="<?php echo e(route('login')); ?>" class="login-form">
        <?php echo csrf_field(); ?>
            <label for="email">Email:</label>
            <input id="email" type="email" name="email" required>

            <label for="password">Password:</label>
            <input id="password" type="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\example-app\resources\views/login.blade.php ENDPATH**/ ?>
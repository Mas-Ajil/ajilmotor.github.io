

<?php $__env->startSection('sigin'); ?>

<div class="row justify-content-center">
    <div class="col-md-3">
        <?php if(session()->has('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo e(session('success')); ?></strong> Silahkan login.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
        <?php endif; ?>
        <?php if(session()->has('failed')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><?php echo e(session('failed')); ?></strong> Silahkan login kembali.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
        <?php endif; ?>



        <main class="form-signin w-100 m-auto">
            <div class="container-fluid text-center d-flex justify-content-center align-items-center" style="padding-top: 50%;">
                <i class="bi bi-person-circle display-4"></i>
            </div>
            <h1 class="h3 mb-3 fw-normal text-center">Login</h1>

            <form action="/login" method="POST" class="row g-3" >
                <?php echo csrf_field(); ?>
                <div class="col-md-12">
                    <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email" name="email" placeholder="Email"  >
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div> 

                <div class="col-md-12">
                  <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password" name="password" placeholder="Password" >
                  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary" type="submit">Login</button>
                  </div>
              </form>
            

            <small class="d-block text-center mt-3">belum punya akun? <a href="/register">Register Now!</a></small>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sigin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/login/index.blade.php ENDPATH**/ ?>
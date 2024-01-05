

<?php $__env->startSection('container'); ?>
<style>
    /* Add a new CSS rule for the red color */
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    
}

    .content {
        max-width: 800px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.415);
        padding: 20px;
        margin-top: 20px;
        background-color: #fff;
   
        border-radius: 8px;
   
        width: 800px;
    }

    button {
        background-color: #3580dc;
        color: #fff;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
        border-radius: 3px;
    }

    button:hover {
        background-color: #3580dc;
    }
    .edit {
        text-align: left;
    }

    table.edit {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th.edit,
    td.edit {
        padding: 12px;
        border: 1px solid #ddd;
        text-align: left;
        position: relative;
    }

    .edit-link {
        display: inline-block;
        margin-left: 10px;
    }

    /* Responsive CSS */
    @media (max-width: 600px) {
        table.edit {
            display: block;
        }

        th.edit,
        td.edit {
            display: block;
            width: 100%;
            box-sizing: border-box;
        }

        th.edit {
            font-weight: bold;
        }

        .edit-link {
            margin-left: 0;
            margin-top: 10px; /* Add some spacing below the text */
        }
    }
</style>
<div class="col-md-3">
    <?php if(session()->has('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><?php echo e(session('success')); ?></strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
    <?php endif; ?>
    <?php if(session()->has('failed')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><?php echo e(session('failed')); ?></strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
    <?php endif; ?>
<div class="content">
    <h1 class="edit">User Data</h1>
    <table class="edit">
        <tr>
            <th class="edit">Nama</th>
            <th class="edit">Email</th>
            <th class="edit">Action</th>
        </tr>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="edit"><?php echo e($user->name); ?></td>
                <td class="edit"><?php echo e($user->email); ?></td>
                <td class="edit">
                <a href="/user/edit/<?php echo e($user->id); ?>"><button type="submit"><i class="bx bx-edit delete-icon"></i></button></a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('account.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/account/user/user.blade.php ENDPATH**/ ?>
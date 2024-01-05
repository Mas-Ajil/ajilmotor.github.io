

<?php $__env->startSection('container'); ?>
<style>
    /* Add a new CSS rule for the red color */
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    
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
        background-color: #dc3545;
        color: #fff;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
        border-radius: 3px;
    }

    button:hover {
        background-color: #c82333;
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

<div class="content">
    <h1 class="edit">Purchase List (Admin Only)</h1>
        <?php if(count($purchases) > 0): ?>
            <table class="edit">
                    <tr>
                        <th class="edit">User</th>
                        <th class="edit">Product Name</th>
                        <th class="edit">Price</th>
                        <th class="edit">Action</th>
                    </tr>
               
                <tbody>
                    <?php $__currentLoopData = $purchases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $purchase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="edit"><?php echo e($purchase->user->name); ?></td>
                            <td class="edit"><?php echo e($purchase->product->nama); ?></td>
                            <td class="edit"><?php echo e($purchase->product->harga); ?></td>
                            <td class="edit">
                                <form onsubmit="return confirm('Tekan untuk menghapus data');" action="<?php echo e(route('delete.penjualan', $purchase->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit"><i class="bx bx-trash delete-icon"></i></button>
                                </form>
                            </td>
                        </tr>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No purchases yet.</p>
        <?php endif; ?> 
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('account.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/account/admin/adminPenjualan.blade.php ENDPATH**/ ?>
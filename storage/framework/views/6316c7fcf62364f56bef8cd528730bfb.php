

<?php $__env->startSection('container'); ?>
<style>
    .content {
        max-width: 100%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.415);
        padding: 20px;
        margin-top: 20px; 
    }

    h1.edit {
        font-size: 24px;
        margin-bottom: 20px;
    }

    table.edit {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    th.edit, td.edit {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    td.edit-delete {
        border: 1px solid #ddd;
        margin: 10px;
        width: 100px;
        text-align: center;
    }

    th.edit {
        background-color: #f2f2f2;
    }

    img {
        max-width: 100px;
        max-height: 100px;
        border-radius: 5px;
    }

    button.edit {
        background-color: #3556dc;
        color: #fff;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
        border-radius: 3px;
    }

    button.delete {
        background-color: #cd2334;
        color: #fff;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
        border-radius: 3px;
    }

    button.edit:hover {
        background-color: #1e2e8f;
    }


    button.delete:hover {
        background-color: #a11728; 
    }


    
    .delete-icon {
        color: #fff;
    }
</style>

<div class="content">
    <h1 class="edit">Product List</h1>
    <table class="edit">
        <tr>
            
            <th class="edit">Gambar</th>
            <th class="edit">Nama</th>
            <th class="edit">Harga</th>
            <th class="edit">Deskripsi</th>
            <th class="edit">Action</th>

        </tr>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                
                <td class="edit">
                    <?php if($product->gambar): ?>
                        <img src="<?php echo e(asset('storage/' . $product->gambar)); ?>" > 
                    <?php else: ?>
                        <img src="<?php echo e($product['gambar']); ?>" alt="<?php echo e($product['nama']); ?>">
                    <?php endif; ?>
                </td>
                <td class="edit"><?php echo e($product->nama); ?></td>
                <td class="edit"><?php echo e($product->harga); ?></td>
                <td class="edit"><?php echo e($product->deskripsi); ?></td>
                <td class="edit-delete">
                    <a href=""><button type="submit" class="edit"><i class="bx bx-edit edit-icon"></i></button></a>
                    <form onsubmit="return confirm('Tekan untuk menghapus data');" action="<?php echo e(route('delete.product', $product->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="delete"><i class="bx bx-trash delete-icon"></i></button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('account.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/account/admin/adminProduct.blade.php ENDPATH**/ ?>
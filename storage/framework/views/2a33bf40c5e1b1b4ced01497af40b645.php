

<?php $__env->startSection('container'); ?>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        @media screen and (max-width: 600px) {
            th, td {
                display: block;
                width: 100%;
                box-sizing: border-box;
            }

            th {
                text-align: center;
            }
        }
    </style>

<div class="content">
    <h2>Your Purchased Products</h2>

    <?php if(count($purchasedProducts) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $purchasedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $purchase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($purchase->product->nama); ?></td>
                        <td><?php echo e($purchase->product->harga); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No purchased products yet.</p>
    <?php endif; ?>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('account.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/account/user/order.blade.php ENDPATH**/ ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="css/riwayat.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('container'); ?>

<div class="container mt-5 border rounded p-3 bg-dark text-white rounded-5">
    <h2>Riwayat Pembelian Motor</h2>
    
    <table class="table">
        <thead>
            <tr>
                <th class="">No.</th>
                <th class="">Tanggal Pembelian</th>
                <th class="">Merk Motor</th>
                <th class="">Harga</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="">1</td>
                <td class="">2023-01-01</td>
                <td class="">Honda CB150R</td>
                <td class="">Rp 25.000.000</td>
            </tr>
        </tbody>
    </table>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/history.blade.php ENDPATH**/ ?>
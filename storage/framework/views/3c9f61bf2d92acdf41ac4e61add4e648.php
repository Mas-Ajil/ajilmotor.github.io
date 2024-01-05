
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="css/product.css"> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('container'); ?>
<section class="content">
<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="product">
      <?php if($product->gambar): ?>
        <img class="img-product" src="<?php echo e(asset('storage/' . $product->gambar)); ?>" > 
      <?php else: ?>
        <img src="<?php echo e($product['gambar']); ?>" alt="<?php echo e($product['nama']); ?>">
      <?php endif; ?>
      <h2><?php echo e($product['nama']); ?></h2>
      <p><?php echo e($product['deskripsi']); ?></p>
      <p>Harga: <?php echo e($product['harga']); ?></p>
      <a href="<?php echo e(url('/products/' .$product->id)); ?>" class="beli-btn">Order</a>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/product.blade.php ENDPATH**/ ?>
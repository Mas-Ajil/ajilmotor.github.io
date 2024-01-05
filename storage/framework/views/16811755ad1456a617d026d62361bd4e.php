

<?php $__env->startSection('container'); ?>
<style>


  
    .img-product {
        max-width: 100%;
        height: auto;
        border-radius: 5px; /* Adjust the border radius as needed */
        
    }
  
   
  </style>

<section class="content">
    <div class="product">
    <img class="img-product" src="<?php echo e(asset('storage/' . $products->gambar)); ?>" > 
    <h1><?php echo e($products->nama); ?></h1>
    <p><?php echo e($products->deskripsi); ?></p>
    <p>Price: <?php echo e($products->harga); ?></p>

        <?php if(auth()->check() && !auth()->user()->hasPurchased($products)): ?>
            <form method="post" action="<?php echo e(route('product.purchase', ['productId' => $products->id])); ?>">
                <?php echo csrf_field(); ?>
                <button type="submit">Purchase</button>
            </form>
        <?php else: ?>
            <p>You have already purchased this product.</p>
        <?php endif; ?>
</div>
</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/products/show.blade.php ENDPATH**/ ?>
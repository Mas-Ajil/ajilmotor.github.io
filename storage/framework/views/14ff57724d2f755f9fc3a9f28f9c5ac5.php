

<?php $__env->startSection('container'); ?>

<table border="1">
  <thead>
      <tr>
          <th>Gambar</th>
          <th>Nama</th>
          <th>Deskripsi</th>
          <th>Harga</th>
      </tr>
  </thead>
  <tbody> 
          <tr>
              <td><img src="<?php echo e($product['gambar']); ?>" alt="<?php echo e($product['nama']); ?>" width="50"></td>
              <td><?php echo e($product['nama']); ?></td>
              <td><?php echo e($product['deskripsi']); ?></td>
              <td><?php echo e($product['harga']); ?></td>
          </tr>
  </tbody>
</table>

      <a href="/product" class="back-btn">back</a>
    
    
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/beli.blade.php ENDPATH**/ ?>
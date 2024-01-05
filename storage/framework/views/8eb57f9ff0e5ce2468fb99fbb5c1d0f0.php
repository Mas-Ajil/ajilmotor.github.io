

<?php $__env->startSection('container'); ?>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    
    justify-content: center;
    height: 100vh;
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 500px;
}

label {
    display: block;
    margin-bottom: 8px;
}

input, textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 12px;
    box-sizing: border-box;
}

button {
    background-color: #4caf50;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    
    
}

button:hover {
    background-color: #45a049;
}

.success-message {
    color: #4caf50;
    margin-top: 10px;
}

h1.edit {
    text-align: center;
    margin-top: 0%;
}

    </style>
<?php if(session('success')): ?>
    <p><?php echo e(session('success')); ?></p>
<?php endif; ?>
<div class="content">
    <h1 class="edit">Add Product</h1>
<form method="post" action="<?php echo e(route('products.store')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <label for="name">Name:</label>
    <input type="text" name="nama" required>
    <br>
    <label for="description">Description:</label>
    <textarea name="deskripsi" required></textarea>
    <br>
    <label for="price">Price:</label>
    <input type="text" name="harga" required>
    <br>
    <div class="mb-3">
        <label for="gambar" class="form-label">Tambahkan Gambar model</label>
        <input class="form-control" type="file" id="gambar" name="gambar">
      </div>
    <button type="submit">Submit</button>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('account.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/account/admin/createProduct.blade.php ENDPATH**/ ?>
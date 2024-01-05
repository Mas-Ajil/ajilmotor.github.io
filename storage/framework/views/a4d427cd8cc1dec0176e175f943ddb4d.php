

<?php $__env->startSection('container'); ?>
<style>
  

  .content {
      width: 80%;
      
  }

  h1.user{
      text-align: center;
  }

  table.edit {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
  }

  th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
  }

  th {
      background-color: #f2f2f2;
  }

  a.edit {
      display: inline-block;
      padding: 6px 12px;
      text-decoration: none;
      background-color: #007BFF;
      color: #fff;
      border-radius: 4px;
  }

  a.edit:hover {
      background-color: #0056b3;
  }

  
</style>
<div class="content">
    <h1 class="edit">User Data</h1>
    <table class="edit">
      <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <th class="edit">Nama</th>
          <td><?php echo e($user->name); ?></td>
        </tr>
        <tr>
          <th class="edit">Email</th>
          <td><?php echo e($user->email); ?></td>
        </tr>
        <tr>
          <td colspan="2" class="edit">
            <button type="button">
              <a class="edit-link" href="/useredit">Edit</a>
            </button>
          </td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
  </div>
  

<?php $__env->stopSection(); ?>



<?php echo $__env->make('account.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/account/user.blade.php ENDPATH**/ ?>
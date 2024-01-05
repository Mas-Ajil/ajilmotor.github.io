<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
          font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            text-align: center;
  
        }

        h2{
          text-align: center;
          
        }

        .container {
      max-width: 800px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.415);
      padding: 20px;
      margin-top: 100px;
      background-color: #fff;
      border-radius: 8px;
      width: 300px;
      }


        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
        }

        input {
            padding: 8px;
            margin-bottom: 10px;
        }

        button {
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        @media screen and (max-width: 600px) {
            input {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Edit Data</h2>

    <form method="POST" action="/user/<?php echo e($user->id); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo e(old('name', $user->name)); ?>" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo e(old('email', $user->email)); ?>" required>

        <button type="submit">Update</button>
    </form>
</div>

</body>
</html>


  
  <?php /**PATH C:\xampp\htdocs\example-app\resources\views/account/user/useredit.blade.php ENDPATH**/ ?>
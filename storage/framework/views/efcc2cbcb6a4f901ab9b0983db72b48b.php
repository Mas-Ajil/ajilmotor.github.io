<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title); ?></title>
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="stylesheet" href="assets/vendors/boxicons/css/boxicons.min.css">
</head>
<body>

    <div class="sidebar">
        <div class="logo-content">
            <div class="logo">
                <i class="bx bx-code-alt"></i>
                <div class="logo-name">Account</div>
            </div>
            <i class="bx bx-menu" id="toggleMenu"></i>
        </div>
        <ul class="nav-list">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bx bx-grid-alt"></i> <span class="nav-name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bx bx-user"></i> <span class="nav-name">User</span>
                </a>
                <span class="tooltip">User</span>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bx bx-cart"></i> <span class="nav-name">Order</span>
                </a>
                <span class="tooltip">Order</span>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bx bx-info-circle"></i> <span class="nav-name">Help</span>
                </a>
                <span class="tooltip">Setting</span>
            </li>
        </ul>
        <div class="profile-content">
            <div class="profile">
                <div class="profile-details">
                    <img src="assets/images/profile.jpg" alt="Profile" class="profile-image">
                    <div class="name-job">
                        <div class="name">Yunus Almeida</div>
                        <div class="job">Web Developer</div>
                    </div>
                </div>
                <i class="bx bx-log-out" id="logout"></i>
            </div>
        </div>
    </div>

    <div class="content-wrapper">
        <div class="text">Home Content</div>
    </div>

    <script src="assets/scripts/script.js"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\example-app\resources\views/account/index.blade.php ENDPATH**/ ?>
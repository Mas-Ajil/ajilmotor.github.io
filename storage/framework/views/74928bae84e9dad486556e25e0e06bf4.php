

<?php $__env->startSection('container'); ?>
    
<style>
body {
    overflow: hidden;
}
    /* Apply styles to the page header */
#page-header {
    background-color: #f8f9fa; /* Set your desired background color */
    border-bottom: 1px solid #dee2e6; /* Add a border at the bottom */
    margin-right: 20px;
    margin-top: 10px;
}

.card {
    border: 1px solid rgba(0, 0, 0, 0.125); /* Add a border to the card */
    border-radius: 0.25rem; /* Add border-radius for rounded corners */
}

.card-body {
    padding: 1.25rem; /* Add padding to the card body */
}

/* Style the page context header */
.page-context-header {
    display: flex;
    align-items: center;
}

.page-header-image {
    margin-right: 1rem; /* Add margin to the image for spacing */
}

.userpicture {
    border-radius: 50%; /* Make the user picture round */
}

.page-header-headings {
    margin-bottom: 0; /* Remove margin bottom from headings */
}

h1 {
    font-size: 1.5rem; /* Set the font size for the heading */
    margin-bottom: 0; /* Remove margin bottom from the heading */
}



</style>
<div class="content">
<header id="page-header" class="row">
    <div class="col-12 pt-3 pb-3">
        <div class="card ">
            <div class="card-body ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <div class="page-context-header">
                            <div class="page-header-image">
                                <a href="/edit-gambar" class="d-inline-block aabtn">
                                    <img src="assets/images/profile.png" class="userpicture" width="100" height="100" alt="Picture of AZIZIL'AN SARINA PUTRA" title="Picture of AZIZIL'AN SARINA PUTRA">
                                </a>
                            </div>
                            <div class="page-header-headings">
                                <h1>Welcome Back , <?php echo e(auth()->user()->name); ?></h1>
                            </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('account.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/account/dashboard.blade.php ENDPATH**/ ?>
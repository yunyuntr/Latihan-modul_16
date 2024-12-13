<div class="container mt-4" class="card-header" style="font-size: 1.45rem; font-weight:600; color: #000000;">
    <?php echo e(__('Dashboard')); ?>

    <hr>
    <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
        <div class="bi-house-fill me-3 fs-1"></div>
        <div class="mb-0" class="card-body" style="">

            <?php if(session('status')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>
            <?php echo e(__('You are logged in!')); ?>

        </div>
    </div>
</div>
<?php /**PATH C:\xampp2\htdocs\LARAVEL\modul_12\resources\views/home-1.blade.php ENDPATH**/ ?>
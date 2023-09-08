

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>News Page</h1>
    <p>Scroll Now</p>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Art</h5>
                    <p class="card-text">Media News</p>
                    <p class="card-text">Drama News</p>
                    <a href="#" class="btn btn-primary">Read</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Economic</h5>
                    <p class="card-text">Local economic</p>
                    <p class="card-text">Global economic</p>
                    <a href="#" class="btn btn-primary">Read</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vip\AASTMS-app\resources\views/newspaper/index.blade.php ENDPATH**/ ?>
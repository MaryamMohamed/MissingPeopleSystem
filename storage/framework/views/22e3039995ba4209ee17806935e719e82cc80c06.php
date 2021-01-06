<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layouts.message-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Welcome Page')); ?></div>
                    
                <div class="card-body">
                <header> <h3> ALL REPORTS</h3> </header>
                    <div>
                        <?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <article class="report">
                                <li> Full Name: <?php echo e($report -> full_name); ?> </li>
                                <li> Age: <?php echo e($report -> age); ?> </li>
                                <li> Birth of Date: <?php echo e($report -> birth_date); ?> </li>
                                <li> Gender: <?php echo e($report -> gander); ?> </li>
                                <li> Date Of Accidint: <?php echo e($report -> date_of_found); ?> </li>
                                <li> State: <?php echo e($report -> state); ?> </li>
                                <li> User: <?php echo e($report -> user->name); ?> </li>
                                <div class="authentic">
                                    <?php if(Auth::user() == $report->user): ?>
                                    <a href="<?php echo e(route('report.delete', ['id' => $report->id])); ?>"> Delete </a>
                                    <a href="<?php echo e(route('report.edit', ['id' => $report->id])); ?>"> Edit </a>
                                    <?php endif; ?>
                                </div>
                                <br> ---------------------------------------------------------------- </br>
                            </article>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\college\level.4\GP\GraduationProjectV1.1\MissingPeopleSystem\resources\views/welcome.blade.php ENDPATH**/ ?>
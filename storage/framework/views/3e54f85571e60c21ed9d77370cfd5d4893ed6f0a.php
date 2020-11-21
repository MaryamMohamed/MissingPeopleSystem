

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Profile Page')); ?></div>

                <div class="card-body">
                    

                    <div class="flex justify-between items-center">
                    <?php if(Route::has('login')): ?>

                        <?php if(auth()->guard()->check()): ?>
                        <!-- <td>
                            <img src="<?php echo e($user->avatar); ?>" width="200" height="200" />
                        </td> -->
                        
                        <div>
                            <h2 class="font-bold text-2xl mb-2"> <?php echo e($user->name); ?> </h2>
                            <p class="text-sm"> Since: <?php echo e($user->created_at->diffForHumans()); ?> </p>
                            <p class="text-sm"> E-mail: <?php echo e($user->email); ?> </p>
                            <p class="text-sm"> Phone Number: 0<?php echo e($user->phone); ?> </p>
                        </div>
                        <?php if(auth()->user()->is($user)): ?>
                        <div>                            
                            <a href="<?php echo e($user->path('edit')); ?>" class="rounded-lg shadow py-2 px-3 text-black"> Edit Profile </a>                           
                        </div>
                        <?php endif; ?>
                        <?php else: ?>
                        <div>
                            <h2 class="font-bold text-2xl mb-2"> <?php echo e($user->name); ?> </h2>
                            <p class="text-sm"> Since: <?php echo e($user->created_at->diffForHumans()); ?> </p>
                            <p class="text-sm"> E-mail: <?php echo e($user->email); ?> </p>
                            <p class="text-sm"> Phone Number: <?php echo e($user->phone); ?> </p>
                        </div>
                        <?php endif; ?>
                    <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\college\level.4\GP\GraduationProjectV1.1\MissingPeopleSystem\resources\views/profiles/show.blade.php ENDPATH**/ ?>

<?php $__env->startSection('content'); ?>

    <!-- ======= Testimonials Section ======= -->
    <div class="section-title " data-aos="fade-up">
        <h2></h2>
    </div>
    <?php if(auth()->user()->is($user)): ?>
      <div class="section-title " data-aos="fade-up">
          <h2>My Profile</h2>
      </div>
    
    <?php else: ?>
      <div class="section-title " data-aos="fade-up">
          <h2>Profile</h2>
      </div>
    <?php endif; ?>
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">
      

        <div>
          <div class="testimonial-item">
            <?php if(Route::has('login')): ?>
                <?php if(auth()->guard()->check()): ?>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <!-- <td>
                    <img src="<?php echo e($user->avatar); ?>" width="200" height="200" />
                </td> -->
                <div>
                    <h3> <?php echo e($user->name); ?> </h3>
                    <h5> Since: <?php echo e($user->created_at->diffForHumans()); ?> </h5>
                    <h5> E-mail: <?php echo e($user->email); ?> </h5>
                    <h5> Phone Number: 0<?php echo e($user->phone); ?> </h5>
                </div>
                <?php if(auth()->user()->is($user)): ?>
                <div>                            
                    <a href="<?php echo e(route('edit',auth()->user())); ?>" class="rounded-lg shadow py-2 px-3 text-black"> Edit Profile </a>                           
                </div>
                <?php endif; ?>
                <?php else: ?>
                <div>
                    <h3> <?php echo e($user->name); ?> </h3>
                    <h5> Since: <?php echo e($user->created_at->diffForHumans()); ?> </h5>
                    <h5> E-mail: <?php echo e($user->email); ?> </h5>
                    <h5> Phone Number: <?php echo e($user->phone); ?> </h5>
                </div>
                <?php endif; ?>
            <?php endif; ?>
          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\college\level.4\GP\GraduationProjectV1.1\MissingPeopleSystem\resources\views/profiles/show.blade.php ENDPATH**/ ?>
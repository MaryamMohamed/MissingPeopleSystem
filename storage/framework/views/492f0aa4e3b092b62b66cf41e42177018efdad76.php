<?php $__env->startSection('content'); ?>
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>My Cases</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
                <form action="/search" method="get">
                    <div class="input-group row">
                            <div class="form-group col">
                                <input type="search" name="name" class="form-control" placeholder="name">                
                            </div>
                            
                            <div class="form-group col">
                                <input type="search" name="age" class="form-control" placeholder="age">
                            </div>
                            <div class="form-group col">
                                <input type="search" name="date_of_found" class="form-control" placeholder="date of found">
                            </div>
                            <span class="input-group-prepend">
                                <button type="submit" class="btn">search</button>
                            </span>
                    </div>
                </form>
                <h4> Sort By </h4>
                <li data-filter="*"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('full_name'));?></li>
                <li data-filter="*"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('age'));?></li>
                <li data-filter="*"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('gander'));?></li>
                <li data-filter="*"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('date_of_found'));?></li>
                 
            </ul>
          </div>
        </div>
        
        <br/>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                
        <?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><?php echo e($report->full_name); ?></h4>
                            <p><?php echo e($report->accident); ?></p>
                            <div class="portfolio-links">
                            <a href="assets/img/team/team-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="<?php echo e(route('report.show',$report->id)); ?>" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                            <?php if(Auth::user() == $report->user): ?>
                                <a href="<?php echo e(route('reports.missed.edit',$report->id)); ?>" class="btn btn-success"><i class="material-icons">Edit</i></a>
                                <br/>

                                <form id="delete-form-<?php echo e($report->id); ?>" action="<?php echo e(route('reports.missed.destroy',$report->id)); ?>" style="display: none;" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                </form>

                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                    event.preventDefault();
                                    document.getElementById('delete-form-<?php echo e($report->id); ?>').submit();
                                }else {
                                    event.preventDefault();
                                        }"><i class="material-icons">delete</i></button>
                            <?php endif; ?>
                        </div>
                        </div>
                    </div>
                        
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- End Portfolio Section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\college\level.4\GP\GraduationProjectV1.1\MissingPeopleSystem\resources\views/home.blade.php ENDPATH**/ ?>
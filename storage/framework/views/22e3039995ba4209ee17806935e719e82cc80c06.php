<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Knight Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Knight - v2.2.0
  * Template URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <!-- <a href="index.html" class="hero-logo" data-aos="zoom-in"><img src="assets/img/hero-logo.png" alt=""></a> -->
      <h1 data-aos="zoom-in">Welcome To Missing People System</h1>
      <a data-aos="fade-up" href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container">

      <!-- The main logo is shown in mobile version only. The centered nav-logo in nav menu is displayed in desktop view  -->
      <div class="logo d-block d-lg-none">
        <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul class="nav-inner">
           <!-- Authentication Links -->
        <!-- Authentication Links -->
            <?php if(Route::has('login')): ?>
                <?php if(auth()->guard()->check()): ?>
                    <li class="active"><a href="<?php echo e(url('/')); ?>">Home</a></li>
                    <li class="drop-down"><a href="">About</a>
                        <ul>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#team">Our Team</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">Contact Us</a></li>
                    <li class="drop-down"><a href="#portfolio">People</a>
                        <ul>
                        <li><a href="<?php echo e(url('/people-found')); ?>">Al Founded Reports</a></li>
                        <li><a href="<?php echo e(url('/missing-persons')); ?>">All Missed Reports</a></li>
                        </ul>
                    </li>
                    <li class="drop-down"><a href="">Make Report</a>
                        <ul>
                        <li><a href="<?php echo e(url('/create-found-one')); ?>">Report Founded One</a></li>
                        <li><a href="<?php echo e(url('/create-missing-one')); ?>">Report Missed One</a></li>
                        </ul>
                    </li>
                    
                    <?php else: ?>
                        <li class="active"><a href="<?php echo e(url('/')); ?>">Home</a></li>
                        <li class="drop-down"><a href="">About</a>
                            <ul>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#team">Our Team</a></li>
                            </ul>
                        </li>
                        <li><a href="#contact">Contact Us</a></li>
                        <li class="drop-down"><a href="#portfolio">People</a>
                            <ul>
                            <li><a href="<?php echo e(url('/people-found')); ?>">Al Founded Reports</a></li>
                            <li><a href="<?php echo e(url('/missing-persons')); ?>">All Missed Reports</a></li>
                            </ul>
                        </li>
                        <li class="drop-down"><a href="">Make A Report</a>
                            <ul>
                            <li><a href="<?php echo e(url('/create-found-one')); ?>">Report Founded One</a></li>
                            <li><a href="<?php echo e(url('/create-missing-one')); ?>">Report Missed One</a></li>
                            </ul>
                        </li>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                    <?php if(Route::has('register')): ?>
                        <a href="<?php echo e(route('register')); ?>">Register</a>
                    <?php endif; ?>
            
                <?php endif; ?>
            <?php endif; ?>

            <?php if(auth()->guard()->guest()): ?>
                
                <?php else: ?>
                    <li class="drop-down"><a href=""><?php echo e(Auth::user()->name); ?></a>
                        <ul>
                            <a href="<?php echo e(route('profile',auth()->user())); ?>">My Profile</a>
                            <a href="<?php echo e(route('mycases',auth()->user())); ?>">My Cases</a>
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>
                        
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </ul>
                    </li>
            <?php endif; ?>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>About Us</h2>
          <p>Wipe a Tear, Draw a Smile, Salute a Family</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <div class="image">
              <img src="assets/img/about.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-left">
            <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
                <h3>Who are we?</h3>
                <p class="font-italic">
                <h5> We are collection of Egyptian students want to help our people to find their relatives through our site.</h5>
                </p>
                Our goal is:
                <ul>
                  <li><i class="bx bx-check-double"></i> Bring back smiles to families that lost one of them we are bringing back the lost hope.</li>
                </ul>

                Our hope is:
                <ul>
                  <li><i class="bx bx-check-double"></i> To be helpful for everyone visiting our site may god make us a reason for you to find what you looking for.</li>
                </ul>
            </div>
          </div>
          
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Last Cases</h2>
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
                        <img src="<?php echo e('images/' . $report->photo); ?>" class="img-fluid"/>
                        
                        <div class="portfolio-info">
                            <h4><?php echo e($report->full_name); ?></h4>
                            <p><?php echo e($report->accident); ?></p>
                            <div class="portfolio-links">
                            <a href="<?php echo e('images/' . $report->photo); ?>" data-gall="portfolioGallery" class="venobox" title="<?php echo e($report->full_name); ?>"><i class="bx bx-plus"></i></a>
                            <a href="<?php echo e(route('report.show',$report->id)); ?>" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                            <?php if(Auth::user() == $report->user): ?>
                                <a href="<?php echo e(route('reports.edit',$report->id)); ?>" class="btn btn-success"><i class="material-icons">Edit</i></a>
                                <br/>

                                <form id="delete-form-<?php echo e($report->id); ?>" action="<?php echo e(route('reports.destroy',$report->id)); ?>" style="display: none;" method="POST">
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
                <?php if($reports->isEmpty()): ?>
                <h4><?php echo e($message); ?></h4>
                <?php endif; ?>
                
        </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200"> <?php echo $reports->appends(\Request::except('page'))->render(); ?> </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Our Team</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="zoom-in">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Animi est delectus alias quam repellendus nihil nobis dolor. Est sapiente occaecati et dolore. Omnis aut ut nesciunt explicabo qui. Eius nam deleniti ut omnis</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>Aspernatur iste esse aliquam enim et corporis. Molestiae voluptatem aut eligendi quis aut. Libero vel amet voluptatem eos rerum non doloremque</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Ut enim possimus nihil cupiditate beatae. Veniam facere quae non qui necessitatibus rerum eos vero. Maxime sit sunt quo dolor autem est qui quaerat</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="info d-flex flex-column justify-content-center" data-aos="fade-right">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street,<br>New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-left">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <footer id="footer">

<div class="footer-bottom">

  <div class="container">


    <div class="social-links">
      <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
      <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
      <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>

  </div>
</div>

</footer><!-- End Footer -->
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html><?php /**PATH E:\college\level.4\GP\GraduationProjectV1.1\MissingPeopleSystem\resources\views/welcome.blade.php ENDPATH**/ ?>
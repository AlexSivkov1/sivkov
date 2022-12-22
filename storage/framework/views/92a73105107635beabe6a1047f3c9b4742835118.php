

<?php $__env->startSection('content'); ?>
    <section class="hero" id="hero">
        <div class="container">
            <!-- Slider Button (don't edit!)-->
            <div class="row">
                <div class="col-md-12 text-right navicon">
                    <a id="nav-toggle" class="nav_slide_button" href="index.html#"><span></span></a>
                </div>
            </div>
            <!-- HEADER HEADLINE -->
            <div class="row">
                <div class="col-md-8 col-md-offset-1 inner">
                    <h1 class="animated fadeInDown">
                        S<span style="color:#E04343;">IV</span>KOV<br/>
                        <span>Pro<span style="color:#FFE800">fi</span>le</span>
                    </h1><!-- Title -->
                    <h3 class="animated fadeInUp delay-05s"><span class="rotate">English Teacher's Profile</span></h3><!-- Text Rotator -->
                </div>
            </div>
            <!-- Learn More Button -->
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <a href="index.html#about" class="scrollto wow fadeInUp delay-5s ">
                        <p>SEE MORE</p>
                        <p class="scrollto--arrow"><img src="<?php echo e(asset('public/frontend/img/scroll-down.png')); ?>" alt="scroll down arrow"></p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Header Image End -->





<!-- ==========================
HEADER SECTION
=========================== -->


<section id="about">


        <!-- About 1 -->
        <div class="row color-bg">
            <div class="col-md-6 nopadding features-intro-img">
                <div class="about-image" style="background-image:url(<?php echo e(asset('public/frontend/img/about1.png')); ?>)"></div><!-- about image 1 -->
            </div>
            <div class="col-md-6 about-text">
                <h6>High quality webdesign</h6><!-- headline-->
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p><br><!-- About Text 1 -->
                <a href="index.html#team" class="weight-outline-btn">Read more</a><!-- read more button  -->
            </div>
        </div>
        <!-- About 2 -->
        <div class="row">

            <div class="col-md-6 about-text">
                <h6>Professional Photography</h6><!-- Headline -->
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p><br><!-- About Text 2 -->
                <a href="index.html#team" class="weight-outline-btn">Read more</a>	<!-- read more button  -->
            </div>
            <div class="col-md-6 nopadding features-intro-img">
                <div class="about-image" style="background-image:url(img/about2.png)"></div><!-- about image 2 -->
            </div>
        </div>
        <!-- About 3 -->
        <div class="row color-bg">
            <div class="col-md-6 nopadding features-intro-img">
                <div class="about-image" style="background-image:url(<?php echo e(asset('public/frontend/img/about3.png')); ?>)"></div><!-- about image 3 -->
            </div>
            <div class="col-md-6 about-text">
                <h6>3d modeling and animations</h6><!-- Headline-->
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p><br><!-- About Text 3 -->
                <a href="index.html#team" class="weight-outline-btn">Read more</a><!-- read more button  -->
            </div>
        </div>





    <!-- ==========================
    ABOUT SECTION END
    =========================== -->

<!-- ==========================
PORTFOLIO SECTION
=========================== -->
<section class="swag text-center" id="portfolio">
    <div class="container">
        <!-- Headline -->
        <div class="row">
            <h1 class="arrow">
                Recent <span>Porojects</span>
                <a href="<?php echo e(route('to_all_posts')); ?>">
                    <p>SEE MORE</p>
                </a>
            </h1>
        </div>
    </div>
</section>

<div class="container">
    <div class="row row-offset-0">

        <!-- PORTFOLIO ITEM 1 -->
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3 col-sm-6">
            <div class="overlay-effect effects clearfix">
                <div class="img" style="height:540px ">
<?php if($item->main_project_post == 1): ?>
                    <a href="<?php echo e($item->image); ?>" data-lightbox="roadtrip" title="<?php echo e($item->post_name); ?>">
                    <img class="grayscale" style="width: 400px" height="534px"
                     src="<?php echo e($item->image); ?>" alt="<?php echo e($item->post_name); ?>"></a>

<?php endif; ?>

                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div><!--/row-->
</div><!--/.container-->


<section class="text-center section-padding" id="blog">
    <div class="container">
        <!-- Headline -->
        <div class="row">
            <div class="col-md-12">
                <h1 class="arrow">My <span>little</span> blog</h1>
            </div>
        </div><br><br>

        <!-- Blog Slider -->
        <div class="row">
                <ul class="slides">
                    <li>
                        <!-- Blog Entry 1 -->
                        <?php $__currentLoopData = $bposts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="col-md-4"  >

                                <div class="img">
                                    <img src="<?php echo e($item->post_image); ?>" class="grayscale" style="width: 350px" height="250px"                                                alt="<?php echo e($item->post_title); ?>"><!-- Blog Image -->
                                </div>
                            <br>

                            <h2><?php echo e($item->post_title); ?></h2><!-- Headline -->
                            <p><?php echo $item->details; ?></p><!-- Description-->
                            <br>

                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </li>
                    <br>
                    <li>
                    </li>
                </ul>
            </div>
        </div>


</section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('author.author_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\sivkov\resources\views/author/dashboard.blade.php ENDPATH**/ ?>
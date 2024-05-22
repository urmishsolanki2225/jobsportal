<?php if((bool)$siteSetting->is_slider_active): ?>
<!-- Revolution slider start -->
<div class="tp-banner-container">
    <div class="tp-banner" >
        <ul>
        <?php if(isset($sliders) && count($sliders)): ?>
            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!--Slide-->
            <li data-slotamount="7" data-transition="slotzoom-horizontal" data-masterspeed="1000" data-saveperformance="on"> <img alt="<?php echo e($slide->slider_heading); ?>" src="<?php echo e(asset('/')); ?>images/slider/dummy.png" data-lazyload="<?php echo e(ImgUploader::print_image_src('/slider_images/'.$slide->slider_image)); ?>">
                <div class="caption lft large-title tp-resizeme slidertext1" data-x="left" data-y="90" data-speed="600" data-start="1600"><?php echo e($slide->slider_heading); ?></div>
                <div class="caption lfb large-title tp-resizeme sliderpara" data-x="left" data-y="200" data-speed="600" data-start="2800"><?php echo $slide->slider_description; ?></div>
                <div class="caption lfb large-title tp-resizeme slidertext5" data-x="left" data-y="300" data-speed="600" data-start="3500"><a href="<?php echo e($slide->slider_link); ?>"><?php echo e($slide->slider_link_text); ?></a></div>
            </li>
            <!--Slide end--> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </ul>
    </div>
</div>
<!-- Revolution slider end --> 
<div class="slidersearch">
    <div class="container">
<?php echo $__env->make('includes.search_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
</div>

<?php else: ?>
<div class="searchwrap">


    <div class="srjobseeker">
        <div class="bxsrctxt">
            <h2><i class="fas fa-user"></i> <?php echo e(__('Jobseeker')); ?></h2>
            <h3><?php echo e(__('One million success stories. Start yours today')); ?>.</h3>
            <p><?php echo e(__("Your dream job doesn't exist. You must create it")); ?>.</p>
            <a href="<?php echo e(url('my-profile')); ?>" class="btn btn-yellow mt-5"><?php echo e(__('Start Applying Today')); ?></a>
        </div>
    </div>

   
    <div class="srcompanies">
        <div class="bxsrctxt">
            <h2><i class="fas fa-building"></i> <?php echo e(__('Companies')); ?></h2>
            <h3><?php echo e(__('Looking for the right talent? Start Posting Job')); ?>.</h3>
            <p><?php echo e(__('Hiring the right people takes time, the right questions, and a healthy dose of curiosity')); ?>.</p>
            <a href="<?php echo e(route('register')); ?>" class="btn btn-dark mt-5"><?php echo e(__('Post a Job Today')); ?></a>
        </div>
    </div>


</div>





<div class="statsbox">
    <div class="row">
        <div class="col">
            <div class="statint d-flex">
                <div class="statico"><i class="fas fa-briefcase"></i></div>
                <div class="statinfo">
                <h4><?php echo e($jobsCount); ?></h4>
                <p><?php echo e(__('Jobs')); ?></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="statint d-flex">
            <div class="statico"><i class="fas fa-building"></i></div>
            <div class="statinfo">
                <h4><?php echo e($companyCount); ?> </h4>
                <p><?php echo e(__('Companies')); ?> </p>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="statint d-flex">
            <div class="statico"><i class="fas fa-users"></i></div>
            <div class="statinfo">
                <h4><?php echo e($seekerCount); ?></h4>
                <p><?php echo e(__('Jobseeker')); ?></p>
            </div>
            </div>
        </div>
    </div>
</div>


<div class="searchbarbt">

    <div class="container">
        <?php if(Auth::guard('company')->check()): ?>
        <h3><?php echo e(__('Search Jobseeker')); ?></h3>
        <?php else: ?>
        <h3><?php echo e(__('Search Jobs')); ?></h3>
        <?php endif; ?>


        <?php echo $__env->make('includes.search_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        

       

    </div>
</div>



<?php endif; ?>






<?php /**PATH E:\xampp\htdocs\dev\codecanyon\jobsportal\resources\views/includes/search.blade.php ENDPATH**/ ?>
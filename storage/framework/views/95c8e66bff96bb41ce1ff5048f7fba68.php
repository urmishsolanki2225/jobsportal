<div class="section testimonialwrap">
    <div class="container"> 
        <!-- title start -->
        <div class="titleTop">
            <div class="subtitle"><?php echo e(__('Testimonials')); ?></div>
            <h3><?php echo e(__('Success Stories')); ?></h3>
        </div>
        <!-- title end -->

        <ul class="testimonialsList owl-carousel">
            <?php if(isset($testimonials) && count($testimonials)): ?>
            <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="item">
                <div class="clientname"><?php echo e($testimonial->testimonial_by); ?></div>
				 <div class="clientinfo"><?php echo e($testimonial->company); ?></div>
                 <div class="ratinguser">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
				</div>
                <p>"<?php echo e($testimonial->testimonial); ?>"</p>               
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </ul>
    </div>
</div><?php /**PATH E:\xampp\htdocs\dev\codecanyon\jobsportal\resources\views/includes/testimonials.blade.php ENDPATH**/ ?>

<div class="userloginbox">
		<div class="usrintxt">
		<div class="titleTop">
           <h3><?php echo e(__('Are You Looking For Job!')); ?> </h3>
		   <h4><?php echo e(__('Search your desire Job')); ?></h4>
        </div>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nunc ex, maximus vel felis ut, vestibulum tristique enim. Proin eu nulla est. Maecenas tempor euismod suscipit. Sed at libero ante. Vestibulum nec odio lacus.</p>
		
		<?php if(!Auth::user() && !Auth::guard('company')->user()): ?>
		<div class="viewallbtn"><a href="<?php echo e(route('register')); ?>"> <?php echo e(__('Get Started Today')); ?> </a></div>
		<?php else: ?>
		<div class="viewallbtn"><a href="<?php echo e(url('my-profile')); ?>"><?php echo e(__('Build Your CV')); ?> </a></div>
		<?php endif; ?>
		</div>
</div>
<?php /**PATH E:\xampp\htdocs\dev\jobsportal\resources\views/includes/login_text.blade.php ENDPATH**/ ?>
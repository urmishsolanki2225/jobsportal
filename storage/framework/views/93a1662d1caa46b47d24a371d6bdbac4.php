<?php if(!Auth::user() && !Auth::guard('company')->user()): ?>
<div class="emploginbox">
		<div class="usrintxt">
		<div class="titleTop">			
           <h3><?php echo e(__('Are You Looking For Candidates!')); ?></h3>
			<h4><?php echo e(__('Post a Job Today')); ?></h4>
        </div>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nunc ex, maximus vel felis ut, vestibulum tristique enim. Proin eu nulla est. Maecenas tempor euismod suscipit. Sed at libero ante. Vestibulum nec odio lacus.</p>
		<div class="viewallbtn"><a href="<?php echo e(route('register')); ?>"><?php echo e(__('Post a Job')); ?></a></div>
		</div>		
</div>
<?php endif; ?><?php /**PATH E:\xampp\htdocs\dev\codecanyon\jobsportal\resources\views/includes/employer_login_text.blade.php ENDPATH**/ ?>
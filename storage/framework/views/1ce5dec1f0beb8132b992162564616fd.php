<?php if(isset($video)): ?>
<div class="videowraper section">
			
	<div class="container">

		<div class="vidover">
			<div class="titleTop">
				<h3><?php echo e(__('Our Office Tour')); ?></h3>
			</div>        
			<p><?php echo e($video->video_text); ?></p>
		</div>

		<div class="ratio ratio-16x9 mt-5">
			<iframe src="<?php echo e($video->video_link); ?>" frameborder="0" allowfullscreen></iframe>
		</div>

	
	
	</div>       
     
</div>









<?php endif; ?><?php /**PATH E:\xampp\htdocs\dev\codecanyon\jobsportal\resources\views/includes/video.blade.php ENDPATH**/ ?>
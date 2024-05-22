
<div class="pageSearch">
<form action="<?php echo e(route('job.list')); ?>" method="get">
	<!-- Page Title start -->
	<div class="container">

			
				<div class="row">
					<div class="col-lg-7">

						<?php if(Auth::guard('company')->check()): ?>
						<h3 class="mb-3">   <?php echo e(__('Looking for the right talent? Search Jobseekers Today')); ?>.</h3>
						<?php else: ?>
						<h3 class="mb-3"><?php echo e(__('One million success stories. Start yours today')); ?>.</h3>				
						<?php endif; ?>

						<div class="searchform">
						<div class="input-group">
							<input type="text"  name="search" id="jbsearch" value="<?php echo e(Request::get('search', '')); ?>" class="form-control" placeholder="<?php echo e(__('Enter Skills or job title')); ?>" autocomplete="off" />
							
							<button type="submit" class="btn"><i class="fas fa-search"></i></button>
						</div>
						</div>
					</div>
				</div>
			

	</div>
	<!-- Page Title end -->
</form>
</div>
<?php /**PATH E:\xampp\htdocs\dev\jobsportal\resources\views/includes/inner_top_search.blade.php ENDPATH**/ ?>
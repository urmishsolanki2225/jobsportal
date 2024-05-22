<?php if(Auth::guard('company')->check()): ?>
<form action="<?php echo e(route('job.seeker.list')); ?>" method="get">
    <div class="searchbar">
		<div class="srchbox">		
		<div class="input-group">
		  <input type="text"  name="search" id="empsearch" value="<?php echo e(Request::get('search', '')); ?>" class="form-control" placeholder="<?php echo e(__('Enter Skills or Job Seeker Details')); ?>" autocomplete="off" />
		  <span class="input-group-btn">
			<input type="submit" class="btn" value="<?php echo e(__('Search Job Seeker')); ?>">
		  </span>
		</div>
		</div>
		
       
        
    </div>
</form>
<?php else: ?>
		
	<form action="<?php echo e(route('job.list')); ?>" method="get">		
		<div class="searchbar">
			<div class="input-group">
				<input type="text"  name="search" id="jbsearch" value="<?php echo e(Request::get('search', '')); ?>" class="form-control" placeholder="<?php echo e(__('Enter Skills or job title')); ?>" autocomplete="off" />
				<?php echo Form::select('functional_area_id[]', ['' => __('Select Functional Area')]+$functionalAreas, Request::get('functional_area_id', null), array('class'=>'form-control', 'id'=>'functional_area_id')); ?>

				<button type="submit" class="btn"><i class="fas fa-search"></i></button>
			</div>
		</div>
	</form>

    	
<?php endif; ?><?php /**PATH E:\xampp\htdocs\dev\jobsportal\resources\views/includes/search_form.blade.php ENDPATH**/ ?>
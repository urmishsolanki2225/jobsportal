<div class="section">



    <div class="container"> 
        <!-- title start -->
        <div class="titleTop">            
            <h3><?php echo e(__('Featured Companies')); ?></h3>
        </div>
        <!-- title end -->

        <ul class="employerList owl-carousel owl-theme" data-group-item="2">
            <!--employer-->
            <?php if(isset($topCompanyIds) && count($topCompanyIds)): ?>
            <?php $__currentLoopData = $topCompanyIds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company_id_num_jobs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $company = App\Company::where('id', '=', $company_id_num_jobs->company_id)->active()->first();
            if (null !== $company) {
                ?>
                <li class="item-child" data-number="<?php echo e($company->id); ?>">                
					<div class="empint">
                    <a href="<?php echo e(route('company.detail', $company->slug)); ?>" title="<?php echo e($company->name); ?>">
                        <div class="emptbox">
                        <div class="comimg"><?php echo e($company->printCompanyImage()); ?></div>
                            <div class="text-info-right">
                            <h4><?php echo e($company->name); ?></h4>	
                            <div class="emloc"><i class="fas fa-map-marker-alt"></i> <?php echo e($company->getCity('city')); ?></div>
                            </div>	
                            		
                        </div>
                        <div class="cm-info-bottom mt-3"><i class="fas fa-briefcase"></i> <?php echo e($company->countNumJobs('company_id',$company->id)); ?> <?php echo e(__('Open Jobs')); ?></div>	
                    </a>					
					</div>
			</li>
                <?php
            }
            ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </ul>

    </div> 
	
	
	<div class="largebanner shadow3">
<div class="adin">
<?php echo $siteSetting->index_page_below_top_employes_ad; ?>

</div>
<div class="clearfix"></div>
</div>

	
	
</div>


<?php /**PATH E:\xampp\htdocs\dev\codecanyon\jobsportal\resources\views/includes/top_employers.blade.php ENDPATH**/ ?>
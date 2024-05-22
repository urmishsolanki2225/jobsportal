<div class="section featuredjobwrap">
    <div class="container"> 
        <!-- title start -->
        <div class="titleTop">
            <h3><?php echo e(__('Featured')); ?> <span><?php echo e(__('Jobs')); ?></span></h3>
        </div>
        <!-- title end --> 

        <!--Featured Job start-->
        <ul class="featuredlist row">
            <?php if(isset($featuredJobs) && count($featuredJobs)): ?>
            <?php $__currentLoopData = $featuredJobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $featuredJob): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $company = $featuredJob->getCompany(); ?>
            <?php if(null !== $company): ?>
            <!--Job start-->
            <li class="col-lg-3 col-md-6">
                <div class="jobint">
                    <div class="d-flex">
                        <div class="fticon"><i class="fas fa-briefcase"></i> <?php echo e($featuredJob->getJobType('job_type')); ?></div>                        
                    </div>

                    <h4><a href="<?php echo e(route('job.detail', [$featuredJob->slug])); ?>" title="<?php echo e($featuredJob->title); ?>"><?php echo e($featuredJob->title); ?></a></h4>
                    <strong><i class="fas fa-map-marker-alt"></i> <?php echo e($featuredJob->getCity('city')); ?></strong> 
                    
                    <div class="jobcompany">
                     <div class="ftjobcomp">
                        <span><?php echo e($featuredJob->created_at->format('M d, Y')); ?></span>
                     <a href="<?php echo e(route('company.detail', $company->slug)); ?>" title="<?php echo e($company->name); ?>"><?php echo e($company->name); ?></a>
                     </div>
                    <a href="<?php echo e(route('company.detail', $company->slug)); ?>" class="company-logo" title="<?php echo e($company->name); ?>"><?php echo e($company->printCompanyImage()); ?> </a>
                    </div>
                </div>
            </li>
            <!--Job end--> 
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>

        </ul>
        <!--Featured Job end--> 

        <!--button start-->
        <div class="viewallbtn"><a href="<?php echo e(route('job.list', ['is_featured'=>1])); ?>"><?php echo e(__('View All Featured Jobs')); ?></a></div>
        <!--button end--> 
    </div>
</div><?php /**PATH E:\xampp\htdocs\dev\jobsportal\resources\views/includes/featured_jobs.blade.php ENDPATH**/ ?>
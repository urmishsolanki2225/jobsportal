<div class="section greybg">
<div class="container">

<div class="titleTop text-center">
                <h3><?php echo e(__('Popular Industries')); ?></h3>
            </div>


<div class="popularind">
            
            <ul class="hmindlist">					
                <?php if(isset($topIndustryIds) && count($topIndustryIds)): ?> <?php $__currentLoopData = $topIndustryIds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $industry_id => $num_jobs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                $industry = App\Industry::where('industry_id', '=', $industry_id)->lang()->active()->first();
                ?> <?php if(null !== $industry): ?>
                <li><a href="<?php echo e(route('job.list', ['industry_id[]'=>$industry->industry_id])); ?>" title="<?php echo e($industry->industry); ?>">
                    <?php echo e($industry->industry); ?>

                    (<?php echo e($num_jobs); ?>)
                </a></li>
                <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endif; ?>
            </ul>
        </div>



</div>
</div><?php /**PATH E:\xampp\htdocs\dev\codecanyon\jobsportal\resources\views/includes/industries.blade.php ENDPATH**/ ?>
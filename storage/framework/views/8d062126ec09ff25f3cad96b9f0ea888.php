<div class="section greybg">
    <div class="container">
        <div class="topsearchwrap">

        

        <div class="titleTop">
        <h3><?php echo e(__('Browse Jobs By Categories')); ?></h3>
        </div>

                <div class="srchint">
                <ul class="row categorylisting">
                        <?php if(isset($topFunctionalAreaIds) && count($topFunctionalAreaIds)): ?> 
                        <?php $__currentLoopData = $topFunctionalAreaIds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $functional_area_id_num_jobs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                        
                        <?php
                        $functionalArea = App\FunctionalArea::where('functional_area_id', '=', $functional_area_id_num_jobs->functional_area_id)->lang()->active()->first();
                        ?>
                         <?php if(null !== $functionalArea): ?>

                        

                        <li class="col-lg-3 col-6">
                            <a class="catecard" href="<?php echo e(route('job.list', ['functional_area_id[]'=>$functionalArea->functional_area_id])); ?>" title="<?php echo e($functionalArea->functional_area); ?>">
                                <div class="iconcircle">
                                <?php if($functionalArea->image && file_exists(public_path('uploads/functional_area/' . $functionalArea->image))): ?>
                                    <img src="<?php echo e(asset('uploads/functional_area/' . $functionalArea->image)); ?>" alt="">
                                <?php else: ?>
                                    <!-- Use your dummy image path or URL here -->
                                    <img src="<?php echo e(asset('images/no-image.png')); ?>" alt="Dummy Image">
                                <?php endif; ?>
                                </div>                                   
                                <div class="catedata">
                                    <h3><?php echo \Illuminate\Support\Str::limit($functionalArea->functional_area, $limit = 20, $end = '...'); ?></h3>
                                    <div class="badge"><i class="fas fa-briefcase"></i> (<?php echo e($functional_area_id_num_jobs->num_jobs); ?>) <?php echo e(__('Jobs')); ?></div>
                                </div>
                            </a>
                        </li>

                        <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endif; ?>
                    </ul>
                    <!--Categories end-->
                </div>

                <div class="viewallbtn"><a href="<?php echo e(url('/all-categories')); ?>"><?php echo e(__('View All Categories')); ?></a></div>

            
        </div>
    </div>
</div><?php /**PATH E:\xampp\htdocs\dev\codecanyon\jobsportal\resources\views/includes/popular_searches.blade.php ENDPATH**/ ?>
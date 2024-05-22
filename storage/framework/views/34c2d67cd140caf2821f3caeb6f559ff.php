<div class="section citieswrap">
    <div class="container">
        <!-- title start -->
        <div class="titleTop">            
            <h3><?php echo e(__('Jobs by Cities')); ?></h3>
        </div>
        <!-- title end -->
                <div class="srchint">
                    <ul class="row citiessrchlist">
                        <?php if(isset($topCityIds) && count($topCityIds)): ?> <?php $__currentLoopData = $topCityIds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city_id_num_jobs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        $city = App\City::getCityById($city_id_num_jobs->city_id);
                        ?> <?php if(null !== $city && $city->upload_image): ?>

                        <li class="col-lg-3 col-md-4">
                        
                        <?php if(isset($city) && null!==($city->upload_image )): ?>        
                        <div class="cityimg"><?php echo e(ImgUploader::print_image("city_images/$city->upload_image")); ?></div>                   
                        <?php endif; ?>  
                        <div class="cityinfobox">
                        <h4><a href="<?php echo e(route('job.list', ['city_id[]'=>$city->city_id])); ?>" title="<?php echo e($city->city); ?>"><?php echo e($city->city); ?></a></h4>
                        <span>(<?php echo e($city_id_num_jobs->num_jobs); ?>) <?php echo e(__('Open Jobs')); ?></span>
                        </div>
                        </li>

                        <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endif; ?>
                    </ul>
                    <!--Cities end-->
                </div>
    </div>
</div><?php /**PATH E:\xampp\htdocs\dev\codecanyon\jobsportal\resources\views/includes/top_cities.blade.php ENDPATH**/ ?>
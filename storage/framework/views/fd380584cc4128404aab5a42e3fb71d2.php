
<?php $__env->startSection('content'); ?> 
<!-- Header start --> 
<?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<!-- Header end --> 

<div class="pageSearch">
<div class="container">



      <div class="row">
        <div class="col-lg-7">
        <h3 class="mb-1"><?php echo e(__('Browse Companies')); ?>.</h3>	
        <h5 class="mb-3"><?php echo e(__('Get hired in most high rated companies')); ?>.</h5>

        <section id="joblisting-header" role="search" class="searchform">
        	
            <form id="top-search" method="GET" action="<?php echo e(route('company.listing')); ?>">                                 
            <div class="input-group">        
            <input type="text" name="search" value="<?php echo e(Request::get('search', '')); ?>" class="form-control" placeholder="<?php echo e(__('keywords e.g. "Google"')); ?>" />        
            <button type="submit" id="submit-form-top" class="btn"><i class="fa fa-search" aria-hidden="true"></i> <?php echo e(__('Search Company')); ?></button>
            </div> 
            </form>
        </section>  
        </div>
      </div>



</div></div>






<div class="listpgWraper">
<div class="container">
    <ul class="row compnaieslist">
        <?php if($companies->isEmpty()): ?>
            <p>No active and verified companies found.</p>
        <?php else: ?>
        <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
        <li class="col-lg-3 col-md-6">                
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
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

    </ul>
	 <div class="pagiWrap">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="showreslt">
                                    <?php echo e(__('Showing Companies')); ?> : <?php echo e($companies->firstItem()); ?> - <?php echo e($companies->lastItem()); ?> <?php echo e(__('Total')); ?> <?php echo e($companies->total()); ?>

                                </div>
                            </div>
                            <div class="col-md-7 text-right">
                                <?php if(isset($companies) && count($companies)): ?>
                                <?php echo e($companies->appends(request()->query())->links()); ?>

                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
  
</div>
</div>

<?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('styles'); ?>
<style type="text/css">
    .formrow iframe {
        height: 78px;
    }
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?> 
<script type="text/javascript">
    $(document).ready(function () {
        $(document).on('click', '#send_company_message', function () {
            var postData = $('#send-company-message-form').serialize();
            $.ajax({
                type: 'POST',
                url: "<?php echo e(route('contact.company.message.send')); ?>",
                data: postData,
                //dataType: 'json',
                success: function (data)
                {
                    response = JSON.parse(data);
                    var res = response.success;
                    if (res == 'success')
                    {
                        var errorString = '<div role="alert" class="alert alert-success">' + response.message + '</div>';
                        $('#alert_messages').html(errorString);
                        $('#send-company-message-form').hide('slow');
                        $(document).scrollTo('.alert', 2000);
                    } else
                    {
                        var errorString = '<div class="alert alert-danger" role="alert"><ul>';
                        response = JSON.parse(data);
                        $.each(response, function (index, value)
                        {
                            errorString += '<li>' + value + '</li>';
                        });
                        errorString += '</ul></div>';
                        $('#alert_messages').html(errorString);
                        $(document).scrollTo('.alert', 2000);
                    }
                },
            });
        });
    });
</script> 
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\dev\jobsportal\resources\views/company/listing.blade.php ENDPATH**/ ?>
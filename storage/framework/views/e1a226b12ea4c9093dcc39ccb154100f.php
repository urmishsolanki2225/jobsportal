

<?php $__env->startSection('content'); ?> 

<!-- Header start --> 

<?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 

<!-- Header end --> 
<!-- Title start -->
<?php echo $__env->make('includes.inner_page_title', ['page_title'=>__('Register')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Title end --> 


<div class="authpages">

    <div class="container">

       <div class="row">
        <div class="col-lg-5">
        <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        

<div class="useraccountwrap">
<div class="userbtns">

             <ul class="nav nav-tabs">

                 <?php

                 $c_or_e = old('candidate_or_employer', 'candidate');

                 ?>

                 <li class="nav-item"><a class="nav-link <?php echo e(($c_or_e == 'candidate')? 'active':''); ?>" data-bs-toggle="tab" href="#candidate" aria-expanded="true"><?php echo e(__('Candidate')); ?></a></li>

                 <li class="nav-item"><a class="nav-link <?php echo e(($c_or_e == 'employer')? 'active':''); ?>" data-bs-toggle="tab" href="#employer" aria-expanded="false"><?php echo e(__('Employer')); ?></a></li>

             </ul>

         </div>

     <div class="userccount whitebg">

         
         <div class="tab-content">

             <div id="candidate" class="formpanel mt-0 tab-pane <?php echo e(($c_or_e == 'candidate')? 'active':''); ?>">
                <h3><?php echo e(__('Register as a Candidate')); ?></h3>
                 <form class="form-horizontal mt-3" method="POST" action="<?php echo e(route('register')); ?>">

                     <?php echo e(csrf_field()); ?>


                     <input type="hidden" name="candidate_or_employer" value="candidate" />

                     <div class="formrow<?php echo e($errors->has('first_name') ? ' has-error' : ''); ?>">

                         <input type="text" name="first_name" class="form-control" required="required" placeholder="<?php echo e(__('First Name')); ?>" value="<?php echo e(old('first_name')); ?>">

                         <?php if($errors->has('first_name')): ?> <span class="help-block"> <strong><?php echo e($errors->first('first_name')); ?></strong> </span> <?php endif; ?> </div>

                     <div class="formrow<?php echo e($errors->has('middle_name') ? ' has-error' : ''); ?>">

                         <input type="text" name="middle_name" class="form-control" placeholder="<?php echo e(__('Middle Name')); ?>" value="<?php echo e(old('middle_name')); ?>">

                         <?php if($errors->has('middle_name')): ?> <span class="help-block"> <strong><?php echo e($errors->first('middle_name')); ?></strong> </span> <?php endif; ?> </div>

                     <div class="formrow<?php echo e($errors->has('last_name') ? ' has-error' : ''); ?>">

                         <input type="text" name="last_name" class="form-control" required="required" placeholder="<?php echo e(__('Last Name')); ?>" value="<?php echo e(old('last_name')); ?>">

                         <?php if($errors->has('last_name')): ?> <span class="help-block"> <strong><?php echo e($errors->first('last_name')); ?></strong> </span> <?php endif; ?> </div>

                     <div class="formrow<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">

                         <input type="email" name="email" class="form-control" required="required" placeholder="<?php echo e(__('Email')); ?>" value="<?php echo e(old('email')); ?>">

                         <?php if($errors->has('email')): ?> <span class="help-block"> <strong><?php echo e($errors->first('email')); ?></strong> </span> <?php endif; ?> </div>

                     <div class="formrow<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">

                         <input type="password" name="password" class="form-control" required="required" placeholder="<?php echo e(__('Password')); ?>" value="">

                         <?php if($errors->has('password')): ?> <span class="help-block"> <strong><?php echo e($errors->first('password')); ?></strong> </span> <?php endif; ?> </div>

                     <div class="formrow<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">

                         <input type="password" name="password_confirmation" class="form-control" required="required" placeholder="<?php echo e(__('Password Confirmation')); ?>" value="">

                         <?php if($errors->has('password_confirmation')): ?> <span class="help-block"> <strong><?php echo e($errors->first('password_confirmation')); ?></strong> </span> <?php endif; ?> </div>

                         

                         <div class="formrow<?php echo e($errors->has('is_subscribed') ? ' has-error' : ''); ?>">

<?php

$is_checked = '';

if (old('is_subscribed', 1)) {

$is_checked = 'checked="checked"';

}

?>

                         

                         <input type="checkbox" value="1" name="is_subscribed" <?php echo e($is_checked); ?> />
                         <?php echo e(__('Subscribe to Newsletter')); ?>


                         <?php if($errors->has('is_subscribed')): ?> <span class="help-block"> <strong><?php echo e($errors->first('is_subscribed')); ?></strong> </span> <?php endif; ?> </div>

                         
                         
                         

                     <div class="formrow<?php echo e($errors->has('terms_of_use') ? ' has-error' : ''); ?>">

                         <input type="checkbox" value="1" name="terms_of_use" />

                         <a href="<?php echo e(url('cms/terms-of-use')); ?>"><?php echo e(__('I accept Terms of Use')); ?></a>



                         <?php if($errors->has('terms_of_use')): ?> <span class="help-block"> <strong><?php echo e($errors->first('terms_of_use')); ?></strong> </span> <?php endif; ?> </div>

                  <div class="form-group col-12 col-sm-12 col-md-10 text-center mx-auto mobile-padding-no <?php echo e($errors->has('g-recaptcha-response') ? ' has-error' : ''); ?>">
                         <?php echo app('captcha')->display(); ?>

                         <?php if($errors->has('g-recaptcha-response')): ?> <span class="help-block">
                             <strong><?php echo e($errors->first('g-recaptcha-response')); ?></strong> </span> <?php endif; ?>
                     </div>

                     <input type="submit" class="btn" value="<?php echo e(__('Register')); ?>">

                 </form>

             </div>

             <div id="employer" class="formpanel mt-0 tab-pane fade <?php echo e(($c_or_e == 'employer')? 'active':''); ?>">
                    <h3><?php echo e(__('Register as a Employer')); ?></h3>
                 <form class="form-horizontal mt-3" method="POST" action="<?php echo e(route('company.register')); ?>">

                     <?php echo e(csrf_field()); ?>


                     <input type="hidden" name="candidate_or_employer" value="employer" />

                     <div class="formrow<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">

                         <input type="text" name="name" class="form-control" required="required" placeholder="<?php echo e(__('Name')); ?>" value="<?php echo e(old('name')); ?>">

                         <?php if($errors->has('name')): ?> <span class="help-block"> <strong><?php echo e($errors->first('name')); ?></strong> </span> <?php endif; ?> </div>

                     <div class="formrow<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">

                         <input type="email" name="email" class="form-control" required="required" placeholder="<?php echo e(__('Email')); ?>" value="<?php echo e(old('email')); ?>">

                         <?php if($errors->has('email')): ?> <span class="help-block"> <strong><?php echo e($errors->first('email')); ?></strong> </span> <?php endif; ?> </div>

                     <div class="formrow<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">

                         <input type="password" name="password" class="form-control" required="required" placeholder="<?php echo e(__('Password')); ?>" value="">

                         <?php if($errors->has('password')): ?> <span class="help-block"> <strong><?php echo e($errors->first('password')); ?></strong> </span> <?php endif; ?> </div>

                     <div class="formrow<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">

                         <input type="password" name="password_confirmation" class="form-control" required="required" placeholder="<?php echo e(__('Password Confirmation')); ?>" value="">

                         <?php if($errors->has('password_confirmation')): ?> <span class="help-block"> <strong><?php echo e($errors->first('password_confirmation')); ?></strong> </span> <?php endif; ?> </div>

                         <div class="formrow<?php echo e($errors->has('is_subscribed') ? ' has-error' : ''); ?>">

<?php

$is_checked = '';

if (old('is_subscribed', 1)) {

$is_checked = 'checked="checked"';

}

?>

                         

                         <input type="checkbox" value="1" name="is_subscribed" <?php echo e($is_checked); ?> />
                         <?php echo e(__('Subscribe to Newsletter')); ?>


                         <?php if($errors->has('is_subscribed')): ?> <span class="help-block"> <strong><?php echo e($errors->first('is_subscribed')); ?></strong> </span> <?php endif; ?> </div>


                         

                     <div class="formrow<?php echo e($errors->has('terms_of_use') ? ' has-error' : ''); ?>">

                         <input type="checkbox" value="1" name="terms_of_use" />

                         <a href="<?php echo e(url('cms/terms-of-use')); ?>"><?php echo e(__('I accept Terms of Use')); ?></a>



                         <?php if($errors->has('terms_of_use')): ?> <span class="help-block"> <strong><?php echo e($errors->first('terms_of_use')); ?></strong> </span> <?php endif; ?> </div>

                 <div
                         class="form-group col-12 col-sm-12 col-md-10 text-center mx-auto mobile-padding-no <?php echo e($errors->has('g-recaptcha-response') ? ' has-error' : ''); ?>">
                         <?php echo app('captcha')->display(); ?>

                         <?php if($errors->has('g-recaptcha-response')): ?> <span class="help-block">
                             <strong><?php echo e($errors->first('g-recaptcha-response')); ?></strong> </span> <?php endif; ?>
                     </div>

                     <input type="submit" class="btn" value="<?php echo e(__('Register')); ?>">

                 </form>

             </div>

         </div>

         <!-- sign up form -->

         <div class="newuser"><i class="fas fa-user" aria-hidden="true"></i> <?php echo e(__('Have Account')); ?>? <a href="<?php echo e(route('login')); ?>"><?php echo e(__('Sign in')); ?></a></div>

         <!-- sign up form end--> 



     </div>

 </div>
        </div>

        <div class="col-lg-7">
        <div class="loginpageimg"><img src="<?php echo e(asset('/')); ?>images/login-page-banner.png" alt=""></div>
        </div>

       </div>

        

    </div>

</div>

<?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\dev\jobsportal\resources\views/auth/register.blade.php ENDPATH**/ ?>
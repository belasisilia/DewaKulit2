<?php $__env->startSection('content'); ?>

<?php if($errors->any()): ?>
<script>
  Swal.fire({
    title: 'Error!',
    html: '<ul><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><li><?php echo e($error); ?></li><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></ul>',
    icon: 'error',
    confirmButtonText: 'OK!'
  })
</script>
<?php endif; ?>

<div class="main-w3layouts wrapper">
  <h1>DEWA KULIT</h1>
  <h2>Create your DewaKulit Member profile and get </h2>
  <h2>first access to the very best of DewaKulit </h2>
  <h2>products, event and promotion.</h2>
  <div class="main-agileinfo">
    <div class="agileits-top">
      <form action="/register" method="post">
        <?php echo csrf_field(); ?>
        <input class="text" type="email" name="email" placeholder="Email Address" required=""
          value="<?php echo e(old('email')); ?>">
        <input class="text email" type="password" name="password" placeholder="Password" required=""
          value="<?php echo e(old('password')); ?>">
        <input class="text" type="text" name="first_name" placeholder="First Name" required=""
          value="<?php echo e(old('first_name')); ?>">
        <input class="text w3lpass" type="text" name="last_name" placeholder="Last Name" required=""
          value="<?php echo e(old('last_name')); ?>">
        <div class="wthree-text">
          <label class="anim">
            <input type="checkbox" name="terms" required="">
            <span>I Agree To The Terms & Conditions</span>
          </label>
          <div class="clear"> </div>
        </div>
        <input type="submit" value="SIGNUP">
      </form>
      <p>Have an Account? <a href="<?php echo e(url('/login')); ?>"> Login Now!</a></p>
    </div>
  </div>
  <!-- copyright -->
  <div class="colorlibcopy-agile">
    <p>© 2018 Colorlib Signup Form. All rights reserved | Design by <a href="https://colorlib.com/"
        target="_blank">Colorlib</a></p>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth.structure', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\php\Dewa-Kulit-Laravel-main\resources\views/register.blade.php ENDPATH**/ ?>
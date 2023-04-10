
 <!-- latest jquery-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <!-- Bootstrap js-->
<script src="<?php echo e(asset('assets/js/bootstrap/bootstrap.bundle.min.js')); ?>"></script>
<!-- feather icon js-->
<script src="<?php echo e(asset('assets/js/icons/feather-icon/feather.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/icons/feather-icon/feather-icon.js')); ?>"></script>
<!-- scrollbar js-->
<script src="<?php echo e(asset('assets/js/scrollbar/simplebar.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/scrollbar/custom.js')); ?>"></script>
<!-- Sidebar jquery-->
<script src="<?php echo e(asset('assets/js/config.js')); ?>"></script>
<!-- Plugins JS start-->
<script src="<?php echo e(asset('assets/js/chart/apex-chart/apex-chart.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/chart/apex-chart/stock-prices.js')); ?>"></script>
<script id="menu" src="<?php echo e(asset('assets/js/sidebar-menu.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/slick/slick.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/slick/slick.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/header-slick.js')); ?>"></script>
<?php echo $__env->yieldContent('script'); ?>

<?php if(Route::current()->getName() != 'popover'): ?> 
	<script src="<?php echo e(asset('assets/js/tooltip-init.js')); ?>"></script>
<?php endif; ?>

<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/theme-customizer/customizer.js')); ?>"></script>




<?php if(Route::currentRouteName() == 'index'): ?>
<script>
	new WOW().init();
</script>
<?php endif; ?>
<?php /**PATH /home/webiots/Desktop/cuba-laravel/template/resources/views/layouts/simple/script.blade.php ENDPATH**/ ?>
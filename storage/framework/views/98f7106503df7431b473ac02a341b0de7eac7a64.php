<?php $__env->startSection('title', 'Kanban Board'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/animate.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/jkanban.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Kanban Board</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Apps</li>
<li class="breadcrumb-item active">Kanban Board</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid jkanban-container">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h5>Default Demo                            </h5>
        </div>
        <div class="card-body">
          <div id="demo1"></div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h5>Custom Board  </h5>
          <p class="mb-0">| colors, gutter, click on board&apos;s item and restricting which boards to drag items to                         </p>
        </div>
        <div class="card-body">
          <div id="demo2"></div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h5>API</h5>
          <p class="mb-0">add item, add board, delete board:                    </p>
        </div>
        <div class="card-body">
          <div id="demo3"></div>
          <button class="btn btn-success" id="addDefault">Add &quot;Default&quot; board</button>
          <button class="btn btn-success" id="addToDo">Add element in &quot;To Do&quot; Board</button>
          <button class="btn btn-danger" id="removeBoard">Remove &quot;Done&quot; Board</button>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card note p-20">jKanban is Pure agnostic Javascript plugin for Kanban boards for more options please refer <a href="http://www.riccardotartaglia.it/jkanban/" target="_blank">jkanban Official site  </a>And <a href="https://github.com/riktar/jkanban" target="_blank">githup link</a></div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/jkanban/jkanban.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jkanban/custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/typeahead/handlebars.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/typeahead/typeahead.bundle.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/typeahead/typeahead.custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/typeahead-search/handlebars.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/typeahead-search/typeahead-custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\kinotalk\resources\views/kanban.blade.php ENDPATH**/ ?>
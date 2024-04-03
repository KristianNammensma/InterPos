<?php $__env->startSection('title', 'category'); ?>


<?php $__env->startSection('page-style'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/page-all-product.scss']); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <h4 class="py-3 mb-2">
        <span class="text-muted fw-light">Product /</span> Categorie Lijst
    </h4>

    <div class="form-card d-flex flex-column">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('Admin.Product.Category.CategoryController');

$__html = app('livewire')->mount($__name, $__params, 'lw-3754134723-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Project\newInterPos\InterPos\resources\views/admin/product/categoryList.blade.php ENDPATH**/ ?>
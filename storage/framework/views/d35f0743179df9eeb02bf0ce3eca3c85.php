<?php $__env->startSection('title', 'new product'); ?>


<?php $__env->startSection('page-style'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/page-create-product.scss']); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Gerechten /</span> Nieuw gerecht
    </h4>

    <!-- Sticky Actions -->
    <div class="row">
        <div>
            <div class="form-layout">
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('Admin.Product.Create');

$__html = app('livewire')->mount($__name, $__params, 'lw-3450292045-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            </div>

        </div>
    </div>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Project\newInterPos\InterPos\resources\views/admin/product/newProduct.blade.php ENDPATH**/ ?>
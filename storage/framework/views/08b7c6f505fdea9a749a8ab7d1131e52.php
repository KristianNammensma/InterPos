<?php $__env->startSection('title', 'allAttribute'); ?>


<?php $__env->startSection('page-style'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/page-create-product.scss']); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <h4 class="py-3 mb-4 ms-3">
        <span class="text-muted fw-light">Eigenschappen /</span> Alle Eigenschappen
    </h4>

    <div class="card d-flex flex-column w-100">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('Admin.Attribute.AttributeController');

$__html = app('livewire')->mount($__name, $__params, 'lw-2726553348-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Project\newInterPos\InterPos\resources\views/admin/attribute/allAttribute.blade.php ENDPATH**/ ?>
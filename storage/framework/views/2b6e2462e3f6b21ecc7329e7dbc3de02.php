<?php $__env->startSection('title', 'Create Order Pages'); ?>

<?php $__env->startSection('page-style'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/page-create-order.scss', 'resources/css/tabler-icons.scss']); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <!-- Sticky Actions -->
    <div class="row">
        <div>
            <div class="form-layout">
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('Admin.Order.Create');

$__html = app('livewire')->mount($__name, $__params, 'lw-327118787-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('Admin.Order.Cart');

$__html = app('livewire')->mount($__name, $__params, 'lw-327118787-1', $__slots ?? [], get_defined_vars());

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



<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Project\newInterPos\InterPos\resources\views/admin/order/newOrder.blade.php ENDPATH**/ ?>
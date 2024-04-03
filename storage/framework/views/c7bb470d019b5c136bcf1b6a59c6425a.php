<div>
    <div class="d-flex flex-row justify-content-between ">

        <?php echo $__env->make('livewire.includes.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <button wire:click="createRoute()" class="w-25">Nieuw gerecht <i class="ti ti-plus ti-xs"></i> </button>


    </div>


    <?php echo $__env->make('livewire.includes.Product.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="m-2 w-100">
        <?php echo e($products->links()); ?>

    </div>
</div>
<?php /**PATH C:\Project\newInterPos\InterPos\resources\views/livewire/Admin/Product/product-controller.blade.php ENDPATH**/ ?>
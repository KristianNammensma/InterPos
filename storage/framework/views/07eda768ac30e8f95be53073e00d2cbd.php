<div>
    <div class="info m-3 ">
        <h3> <i class="ti ti-book ti-xl pb-2"></i> <?php echo e($attributeTitle); ?></h3>
    </div>

    <div class="d-flex flex-row justify-content-between m-4">
        <?php echo $__env->make('livewire.includes.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <button wire:click="createRoute()" type="button" class="w-25 btn btn-primary">Nieuw eigenschap + </button>

    </div>

    <!--[if BLOCK]><![endif]--><?php if($isSub === false): ?>
        <?php echo $__env->make('livewire.includes.Attribute.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--><?php if($isSub === true): ?>
        <?php echo $__env->make('livewire.includes.Attribute.subTable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <div class="m-2 w-100">
        <?php echo e($Attribute->links()); ?>

    </div>
</div>
<?php /**PATH C:\Project\newInterPos\InterPos\resources\views/livewire/Admin/Attribute/attribute-controller.blade.php ENDPATH**/ ?>
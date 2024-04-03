<div class="d-flex flex-column">
    <div class="info m-3 ">
        <h3> <i class="ti ti-notebook ti-xl pb-2"></i> Alle Categorieën</h3>
    </div>

    <div>
        <div class="d-flex flex-row justify-content-between ">
            <?php echo $__env->make('livewire.includes.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('livewire.Admin.Product.Category.addCategory', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

    </div>


    <?php echo $__env->make('livewire.includes.Product.Category.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




    
</div>
<?php /**PATH C:\Project\newInterPos\InterPos\resources\views/livewire/Admin/Product/Category/category-controller.blade.php ENDPATH**/ ?>
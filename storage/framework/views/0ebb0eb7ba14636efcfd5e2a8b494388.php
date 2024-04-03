<div class="card-body flex-column ">

    <!--[if BLOCK]><![endif]--><?php if(session('success')): ?>
        <span class="success-msg"><?php echo e(session('success')); ?></span>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <form class="form-body" wire:submit='createProduct'>

        <div id="sticky-wrapper" class="sticky-wrapper flex-shrink-1 ">
            <div
                class="submit-f sticky-element bg-label-secondary
            d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
                <div class="d-flex flex-row">
                    <i class="ti ti-file-pencil ti-xl"></i>
                    <h4> Maak een Gerecht</h4>
                </div>

                <button>Creëren</button>
            </div>
        </div>


        <div class="form-items  d-flex flex-row flex-wrap justify-content-between ">
            <?php echo $__env->make('livewire.includes.Product.productInfo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


            <?php echo $__env->make('livewire.includes.Product.productPrice', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </form>
</div>
<?php /**PATH C:\Project\newInterPos\InterPos\resources\views/livewire/Admin/Product/create.blade.php ENDPATH**/ ?>
<div>
    <!--[if BLOCK]><![endif]--><?php if(session()->has('success')): ?>
        <div class="alert alert-success mt-2">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


    <form class="form-body" wire:submit='createAttribute'>
        <div id="sticky-wrapper" class="sticky-wrapper flex-shrink-1">
            <div
                class="submit-f sticky-element bg-label-secondary
                  d-flex justify-content-sm-evenly align-items-sm-center flex-column flex-sm-row">
                <div class="d-flex flex-row">
                    <i class="ti ti-file-pencil ti-xl"></i>
                    <h4> Maak eigenschap</h4>
                </div>

                <button wire:submit='createAttribute'>Creëren</button>
            </div>
        </div>



        

        <div class="form-items  d-flex flex-row flex-wrap justify-content-evenly ">
            <?php echo $__env->make('livewire.includes.Attribute.attributeInfo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


            <?php echo $__env->make('livewire.includes.Attribute.attributePrice', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>

    </form>
</div>
<?php /**PATH C:\Project\newInterPos\InterPos\resources\views/livewire/Admin/Attribute/create.blade.php ENDPATH**/ ?>
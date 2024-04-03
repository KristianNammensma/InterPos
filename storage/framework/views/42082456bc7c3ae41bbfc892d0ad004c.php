<div class="product-info  d-flex flex-column flex-shrink-1 ">
    <div class="info">
        <h4><i class="ti ti-box ti-sm"></i> Eigenschap informatie</h4>
    </div>

    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->


    <div class="form-name">
        <label for="name" class="form-label"><i class="ti ti-pencil ti-sm"></i> naam</label>
        <input required class="form-control" wire:model='name' type="text" placeholder="Eigenschap titel">
    </div>

    <div class=" mt-4">
        <label for="status" class="form-label"><i class="ti ti-select ti-sm"></i> status</label>

        <div>
            <select required class="form-select" wire:model='status'>
                <option value="Available">Beschikbaar</option>
                <option value="Sold">Uitverkocht</option>
                <option value="Upcoming">Verwacht</option>
            </select>
        </div>
    </div>

    <div class="form-desc">
        <label for="description" class="form-label">Beschrijving</label>

        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->

        <div class="desc-items d-flex flex-column ">
            <div class="form-control" id="toolbox"><i class="ti ti-message-cog ti-sm"></i></div>
            <input class="form-control" id="description" wire:model='description' type="text"
                placeholder="Beschrijving">
        </div>

    </div>

</div>
<?php /**PATH C:\Project\newInterPos\InterPos\resources\views/livewire/includes/Attribute/attributeInfo.blade.php ENDPATH**/ ?>
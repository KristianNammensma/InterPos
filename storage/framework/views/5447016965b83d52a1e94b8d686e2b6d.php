<div class="product-info  d-flex flex-column flex-shrink-1 ">
    <div class="info">
        <h4><i class="ti ti-tools-kitchen-2 ti-sm pb-2"></i> Gerecht informatie</h4>
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
        <label for="name" class="form-label"><i class="ti ti-pencil ti-sm"></i> Naam</label>
        <input class="form-control" wire:model='name' type="text" placeholder="Titel">
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
            <div class="form-control" id="toolbox"><i class="ti ti-book ti-sm"></i></div>
            <input class="form-control" id="description" wire:model='description' type="text"
                placeholder="Beschrijving">
        </div>

    </div>

    <div class="col-md-6 mb-4 mt-4 w-100">
        <label for="select2Primary" class="form-label">Categorie</label>
        <select id="selectpickerMultiple" multiple wire:model="selectedCategories" class="selectpicker w-100"
            data-style="btn-default" multiple data-icon-base="ti" data-tick-icon="ti-check text-white">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option id="<?php echo e($c->id); ?>" value="<?php echo e($c->id); ?>"> <?php echo e($c->name); ?> </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </select>

    </div>

</div>
<?php /**PATH C:\Project\newInterPos\InterPos\resources\views/livewire/includes/Product/productInfo.blade.php ENDPATH**/ ?>
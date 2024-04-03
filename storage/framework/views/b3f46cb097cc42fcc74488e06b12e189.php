<div class="product-price position-relative   d-flex flex-column flex-shrink-1 ">
    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->

    <div class="d-flex position-absolute top-1 align-content-end justify-content-end w-75 ">
        <i class="ti ti-info-square-rounded-filled ti-sm btn btn-info m-0 p-1 bg-dark  " id="type-info"></i>
    </div>

    <div class="info">
        <h4><i class="ti ti-cash ti-sm"></i> Prijs / Optioneel <i class="ti ti-check ti-sm"></i></h4>
    </div>



    <div class="mb-3 mt-3">
        <div class="form-price">

            <h6 class="mb-2 mt-2">Hoofdeigenschap <span class="badge bg-label-danger mb-1 ">Optioneel</span>
            </h6>

            <div class="input-group input-group-sm mb-4">
                <label class="input-group-text" for="inputGroupSelect01"><i class="ti-md ti ti-link"></i></label>
                <select wire:model="parentId" class="form-control w-75" id="inputGroupSelect01">
                    <option class="option" value="" hidden selected>Kies een optie</option>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $allAttributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!--[if BLOCK]><![endif]--><?php if($a->parentId === 0): ?>
                            <option class="option" value="<?php echo e($a->id); ?>">
                                <?php echo e($a->name); ?>

                            </option>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </select>
            </div>

            <hr>

            <h6 class="mb-2  mt-4">Selecteer een Product <span class="badge bg-label-danger mb-1">Optioneel</span>
            </h6>

            <div class="input-group input-group-sm mb-4">
                <select class="form-select" multiple aria-label="Multiple select example">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $allProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option id="<?php echo e($c->id); ?>" value="<?php echo e($c->id); ?>"> <?php echo e($c->name); ?> </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </select>

            </div>

            <hr>

            <div class="form-tax d-flex flex-row">
                <div class="form-price mt-3">
                    <label for="price" class="form-label"><i class="ti ti-currency-euro ti-sm"></i> Prijs <span
                            class="badge bg-label-danger mb-1">Optioneel</span></label>

                    <div class=" input-group d-flex  flex-wrap-reverse ">
                        <input type="text" class="form-control w-50 " wire:model='price'
                            aria-label="Dollar amount (with dot and two decimal places)">
                        <span class="input-group-text">$</span>
                        <span class="input-group-text">0.00</span>
                    </div>
                </div>
            </div>


            <hr>


        </div>

    </div>
<?php /**PATH C:\Project\newInterPos\InterPos\resources\views/livewire/includes/Attribute/attributePrice.blade.php ENDPATH**/ ?>
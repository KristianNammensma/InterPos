<div class="col-lg-3 col-12 invoice-actions">
    <div class="">
        <div class="card-body">
            <button class="btn btn-primary d-grid w-100 mb-2" data-bs-toggle="offcanvas"
                data-bs-target="#sendInvoiceOffcanvas">
                <span class="d-flex align-items-center justify-content-center text-nowrap"><i
                        class="ti ti-plus ti-xs me-2"></i>Nieuwe Categorie</span>
            </button>
        </div>
    </div>

    <!-- Offcanvas -->
    <div class="offcanvas offcanvas-end" id="sendInvoiceOffcanvas" aria-hidden="true">
        <div class="offcanvas-header my-1">
            <h5 class="offcanvas-title">Maak Categorie</h5>
            <button type="button" class="btn-close text-reset w-25 btn bg-label-danger" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body pt-0 flex-grow-1">
            <form wire:submit='createCategory'>

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
                <div class="mb-3">
                    <label class="form-label" for="ecommerce-category-title">Titel</label>
                    <input type="text" wire:model="name" required class="form-control" id="ecommerce-category-title"
                        placeholder="Categorie titel" name="categoryTitle" aria-label="category title">
                </div>
                <!-- Description -->

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

                    <div class="desc-items d-flex flex-column justify-content-center align-items-center">
                        <input class="form-control pt-3" id="description" wire:model='description' type="text"
                            placeholder="Beschrijving" style="padding-bottom: 20vh;">
                    </div>

                </div>
                <!-- Status -->
                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                <div class="mb-4 ecommerce-select2-dropdown">
                    <label class="form-label">Categorie status</label>
                    <select id="ecommerce-category-status" class="select2 form-select"
                        data-placeholder="Selecteer categorie status" wire:model="status">
                        <option value="">Select category status</option>
                        <option value="Available">Beschikbaar</option>
                        <option value="Sold">Uitverkocht</option>
                        <option value="Upcoming">Verwacht</option>
                    </select>
                </div>
                <!-- Submit and reset -->
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Toevoegen</button>
                    <button type="reset" class="btn bg-label-danger" data-bs-dismiss="offcanvas">Verwijderen</button>
                </div>
            </form>
        </div>
    </div>
<?php /**PATH C:\Project\newInterPos\InterPos\resources\views/livewire/Admin/Product/Category/addCategory.blade.php ENDPATH**/ ?>
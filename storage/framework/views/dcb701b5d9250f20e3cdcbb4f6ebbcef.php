<table class="table">
    <thead>
        <tr>
            <th class="mb-0">Gerechtnaam</th>
            <th>Status</th>
            <th>Prijs</th>
            <th>Korting</th>
            <th>BTW</th>
            <th class="text-center">Acties</th>
        </tr>
    </thead>
    <tbody>
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <div>

                    <!--[if BLOCK]><![endif]--><?php if($product->id === $editingProductID): ?>
                        <td><input wire:model="name" class="form-control" id="edit-input" type="text"
                                placeholder="Product Name"></td>

                        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['editingProductName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                    <?php else: ?>
                        <td class="relative">
                            <div class="demo-inline-spacing">
                                <div class="btn-group" id="hover-dropdown-demo">
                                    <div class=" dropdown-toggle mb-2" data-bs-toggle="dropdown" data-trigger="hover">
                                        <?php echo e($product->name); ?>

                                    </div>
                                    <ul class="dropdown-menu">
                                        <li><a wire:click="quickEdit(<?php echo e($product->id); ?>)" class="dropdown-item"
                                                href="javascript:void(0);"> <i
                                                    class="ti ti-pencil ti-sm mb-0 "></i>Quick Edit</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


                    <!--[if BLOCK]><![endif]--><?php if($product->id === $editingProductID): ?>
                        <td>
                            <select wire:model="status" class="form-control" id="edit-select">
                                <option class="option" value="Available">Beschikbaar</option>
                                <option class="option" value="Sold">Uitverkocht</option>
                                <option class="option" value="Upcoming"></option>
                            </select>
                        </td>
                        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['editingProductStatus'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                    <?php else: ?>
                        <td><?php
                        if ($product->status == 'Available') {
                            echo 'Beschikbaar';
                        }
                        if ($product->status == 'Sold') {
                            echo 'Uitverkocht';
                        }
                        if ($product->status == 'Upcoming') {
                            echo 'Verwacht';
                        }
                        ?>
                        </td>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                    <!--[if BLOCK]><![endif]--><?php if($product->id === $editingProductID): ?>
                        <td><input wire:model="price" class="form-control" id="edit-input" type="text"
                                placeholder="Product Price"></td>
                        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['editingProductPrice'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                    <?php else: ?>
                        <td>€<?php echo e($product->price); ?></td>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    <!--[if BLOCK]><![endif]--><?php if($product->id === $editingProductID): ?>
                        <td><input wire:model="salesPrice" class="form-control" id="edit-input" type="text"
                                placeholder="Sales Price"></td>
                    <?php else: ?>
                        <td>€<?php echo e($product->salesPrice); ?></td>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                    <!--[if BLOCK]><![endif]--><?php if($product->id === $editingProductID): ?>
                        <td>
                            <input class="form-check-input" wire:model='vat' type="checkbox" value=""
                                id="price-charge-tax" checked="">
                        </td>
                    <?php else: ?>
                        <td><?php echo e($product->vat); ?>%</td>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                    <!--[if BLOCK]><![endif]--><?php if($product->id === $editingProductID): ?>
                        <td class="d-flex flex-row">
                            <button class="btn-c" wire:click="cancelEdit"><i class="ti ti-x ti-sm"></i></button>
                            <button class="btn-u" wire:click="update(<?php echo e($product->id); ?>)"><i
                                    class="ti ti-check ti-sm"></i></button>
                        </td>
                    <?php else: ?>
                        <td class="d-flex flex-row justify-content-center p-3">
                            <div class="m-2" wire:click="clone(<?php echo e($product->id); ?>)"><i
                                    class="ti ti-box-multiple ti-md" id="type-success" style="color: blue;"></i></div>
                            <div class="m-2" wire:click="goToAnotherPage(<?php echo e($product->id); ?>)"><i
                                    class="ti ti-edit ti-md" style="color: blue;"></i></div>
                            <div class="m-2">
                                <i class="ti ti-trash ti-md" id="confirm-text"
                                    wire:click="delete('<?php echo e($product->id); ?>')" style="color: red;"></i>
                            </div>
                        </td>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>

            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    </tbody>
</table>
<?php /**PATH C:\Project\newInterPos\InterPos\resources\views/livewire/includes/Product/table.blade.php ENDPATH**/ ?>
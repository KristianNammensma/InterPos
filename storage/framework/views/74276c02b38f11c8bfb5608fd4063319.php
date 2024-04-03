<div>
    <div class="col-lg-2 col-md-4">
        <div class="mt-3">
            <div class="offcanvas offcanvas-end <?php if($showOffcanvas): ?> show <?php endif; ?> w-25" tabindex="-1"
                id="offcanvasEnd" aria-labelledby="offcanvasEndLabel">
                <div class="offcanvas-header">
                    <h5 id="offcanvasEndLabel" class="offcanvas-title">Bestelling</h5>
                    <h5 class="m-0 ms-3"><?php echo e($cartCounter); ?> Items</h5>
                    <button type="button" class="btn-close text-reset" wire:click="close()" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div>
                    <hr>
                </div>
                <div class="">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th class="mb-0">Gerecht</th>
                                        <th>Hoeveelheid</th>
                                        <th>Prijs</th>
                                        <th class="text-center">Totaal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="">
                                                <p class="text-black fw-bold fs-6 ">
                                                    <?php echo e($item['product']['name']); ?>

                                                </p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p><?php echo e($item['product']['qty']); ?></p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="">
                                                <p class="text-black fw-bold fs-6  ">
                                                    €<?php echo e($item['product']['price']); ?>

                                                </p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="">
                                                <p class="text-black fw-bold ">
                                                    €<?php echo e($item['product']['price']); ?></p>
                                                <button wire:click="up()"></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
        </div>
    </div>
<?php /**PATH C:\Project\newInterPos\InterPos\resources\views/livewire/Admin/Order/cart.blade.php ENDPATH**/ ?>
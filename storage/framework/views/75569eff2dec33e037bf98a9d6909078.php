<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['name', 'title']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['name', 'title']); ?>
<?php foreach (array_filter((['name', 'title']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div x-data = "{ show : false , name : '<?php echo e($name); ?>'}" x-show= "show"
    x-on:open-modal.window = "show = ($event.detail.name === name)"
    x-on:close-modal.window = "show = !($event.detail.name === name)" x-on:keydown.escape.window = "show = false"
    x-transition.duration.200ms class="position-fixed  w-100 h-100 m-0 p-0 top-0"
    style="left:0; z-index: 500000; display:none;">
    <div x-on:click="show = false" class="position-fixed w-100 h-100 m-0 p-0 bg-black opacity-25 "></div>

    <div class="d-flex justify-content-center align-items-center h-100">
        <div class="card  position-fixed p-4 w-50 h-50">
            <div>
                <!--[if BLOCK]><![endif]--><?php if(isset($title)): ?>
                    <div class="p-2 d-flex justify-content-center align-items-center">
                        <?php echo e($title); ?>

                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
            <div>
                <?php echo e($body); ?>

            </div>
        </div>
    </div>


</div>
<?php /**PATH C:\Project\newInterPos\InterPos\resources\views/components/modal.blade.php ENDPATH**/ ?>
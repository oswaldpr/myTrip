<?php $__env->startSection('sectionWithTitle-content'); ?>
    <select class="form-control UnitType no-search select2-hidden-accessible" id="address_unitType" name="address[unitType]" data-model="address" data-name="address" tabindex="-1" aria-hidden="true">
        <option value="">--</option>
        <option value="1" selected="">Apartment</option>
        <option value="2">Suite</option>
        <option value="3">Unit</option>
    </select>
    <div class="btn-group-justified">
        <button type="button" class="btn btn-cancel " data-dismiss="modal"><?php echo __('Cancel')?></button>
        <button type="button" id="proceed" class="btn btn-default pull-right" @click="proceed()">
        <?php echo __('Proceed')?>
    </button>
    </div>
<?php $__env->stopSection(true); ?>


<?php echo $__env->make('templates.sectionWithTitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/oswald/devlocal/tripBuilder/src/resources/views/templates/sample.blade.php ENDPATH**/ ?>
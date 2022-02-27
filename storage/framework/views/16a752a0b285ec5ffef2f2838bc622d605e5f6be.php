<?php

/** @var  array $type */
/** @var  array $airports */
?>

<?php $__env->startSection('sectionWithTitle-content'); ?>
    <form id="search-trip-form" method="post">
        <?php echo csrf_field(); ?> <!-- <?php echo e(csrf_field()); ?> -->
        <div id="error-message" class="error text-center color-red"></div>
        <?php echo $__env->make('templates.elements.radioElement', ['name' => 'type', 'label' => 'Flight type', 'options' => $type], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div id="preferred-airline">
                <input type="checkbox" id="preferred_airline_check" name="airline_check">
                <span>Preferred airline</span>
            </div>
        <?php echo $__env->make('templates.tripDates', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="clearfix"></div>
        <div class="row col-12">
            <div class="airport-selection col-10">
                <?php echo $__env->make('templates.elements.selectElement', ['name' => 'departure_airport', 'label' => 'Departure airport', 'options' => $airports], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('templates.stopoverList', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('templates.elements.selectElement', ['name' => 'arrival_airport', 'label' => 'Arrival airport', 'options' => $airports], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="add-stopover-btn-wrap col-2"></div>
        </div>

    <div class="search-trip-submit-button-group btn-group-justified text-center">
        <button type="button" id="searchFlight" class="btn btn-default" @click="searchFlight()">
            <?php echo __('Search')?>
        </button>
    </div>
    </form>
<?php $__env->stopSection(true); ?>


<?php echo $__env->make('templates.sectionWithTitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/oswald/devlocal/tripBuilder/src/resources/views/templates/search.blade.php ENDPATH**/ ?>
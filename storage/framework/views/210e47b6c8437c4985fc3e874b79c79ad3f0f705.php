<?php

/** @var  int $nbStopover */
/** @var  array $airports */

use App\Models\Airline;

$airlines = Airline::getAirplineSelectList();
?>
<div id="preferred-airline-select">
    <?php echo $__env->make('templates.elements.selectElement', ['name' => 'airline', 'label' => 'Choose an airline', 'options' => $airlines], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php /**PATH /home/oswald/devlocal/tripBuilder/src/resources/views/templates/preferredAirline.blade.php ENDPATH**/ ?>
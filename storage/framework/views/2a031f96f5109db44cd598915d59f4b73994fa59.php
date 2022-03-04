<?php

/** @var  int $nbStopover */
/** @var  array $airports */

use App\Models\Airport;

$stopover = $nbStopover + 1;
$stopoverName = 'stopover[' . $stopover . ']';
$stopoverLabel = 'Stopover' . ($stopover === 1 ? '' : ' ' . $stopover);

$airports = Airport::getAirportSelectList();
?>
<div class="single-stopover single-stopover-<?php echo $stopover; ?>" data-stopover="<?php echo $stopover; ?>">
    <?php echo $__env->make('templates.elements.selectElement', ['name' => $stopoverName, 'label' => $stopoverLabel, 'options' => $airports], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php if($nbStopover > 0): ?>
        <button type="button" class="close remove-stopover" aria-label="Close">
            <span class="" aria-hidden="true">x</span>
        </button>
    <?php endif; ?>
</div>
<?php /**PATH /home/oswald/devlocal/tripBuilderAdvanced/src/resources/views/templates/newStopover.blade.php ENDPATH**/ ?>
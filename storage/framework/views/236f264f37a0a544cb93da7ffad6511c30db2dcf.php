<?php

/** @var  int $nbStopover */
/** @var  array $airports */

$stopover = $nbStopover + 1;
$stopoverName = 'stopover_airport[' . $stopover . ']';
$stopoverLabel = 'Stopover' . ($nbStopover === 1 ? '' : ' ' . $stopover);
?>
<?php echo $__env->make('templates.selectElement', ['name' => $stopoverName, 'label' => $stopoverLabel, 'options' => $airports], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/oswald/devlocal/tripBuilder/src/resources/views/templates/extraStopover.blade.php ENDPATH**/ ?>
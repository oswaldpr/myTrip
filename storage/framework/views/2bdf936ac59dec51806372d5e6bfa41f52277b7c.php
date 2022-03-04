<?php
use App\Models\Airport;

/** @var  $stopoverList */

$nbStopover = 0;
$stopoverList = $stopoverList ?? [];
$airports = Airport::getAirportSelectList();
?>
<div id="stopover-list">
    <div id="stopover-list-content">
        <?php $__currentLoopData = $stopoverList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $stopover): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('templates.newStopover', ['nbStopover' => $index, 'airports' => $airports, 'selected' => $stopover], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php $nbStopover++; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <input type="hidden" id="nb_stopover" value="<?php echo $nbStopover; ?>" name="nb_stopover">
</div>
<?php /**PATH /home/oswald/devlocal/tripBuilderAdvanced/src/resources/views/templates/stopoverList.blade.php ENDPATH**/ ?>
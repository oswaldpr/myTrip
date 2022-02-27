<?php
use App\Models\FlightTrip;

/** @var  array $type */
/** @var  array $airports */
/** @var  FlightTrip $flightTrip */

$flightTrip = $flightTrip ?? null;
?>


<?php $__env->startSection('content'); ?>
    <div class="homepage">
        <h1 class="text-center">Welcome</h1>
        <?php echo $__env->make('templates.search', ['title' => 'Search a flight trip', 'type' => $type, 'airports' => $airports], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div id="search-result-list">
            <?php if($flightTrip): ?>
                <?php echo $__env->make('templates.results', ['title' => 'Results', 'flightTrip' => $flightTrip], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(true); ?>


<?php echo $__env->make('templates.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/oswald/devlocal/tripBuilderAdvanced/src/resources/views/home.blade.php ENDPATH**/ ?>
<?php
use App\Models\FlightTrip;


/** @var  FlightTrip|null $flightTrip */

$flightTrip = $flightTrip ?? null;
?>


<?php $__env->startSection('sectionWithTitle-content'); ?>
    <div class="search-result-list-content">
        <?php if($flightTrip): ?>
            <div id="result-departure">
                <h3><?php echo e($flightTrip->straightFlight->flightTitle); ?></h3>
                <h5 class="duration">Duration: <?php echo e($flightTrip->straightFlight->totalDuration); ?></h5>
                <?php $__currentLoopData = $flightTrip->straightFlight->flights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $currentFlight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="result-single-flight">
                        <?php echo $__env->make('templates.resultFlight', ['flight' => $currentFlight], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php if($flightTrip->returnFlight): ?>
                <div id="result-return">
                    <h3><?php echo e($flightTrip->returnFlight->flightTitle); ?></h3>
                    <h5 class="duration">Duration: <?php echo e($flightTrip->returnFlight->totalDuration); ?></h5>
                    <?php $__currentLoopData = $flightTrip->returnFlight->flights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currentFlight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="result-single-flight">
                            <?php echo $__env->make('templates.resultFlight', ['flight' => $currentFlight], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
            <h3>Price: <b><?php echo e($flightTrip->totalPrice); ?></b></h3>
        <?php else: ?>
            <div class="text-center">
                Sorry, no results for your search!
            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(true); ?>


<?php echo $__env->make('templates.sectionWithTitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/oswald/devlocal/tripBuilderAdvanced/src/resources/views/templates/results.blade.php ENDPATH**/ ?>
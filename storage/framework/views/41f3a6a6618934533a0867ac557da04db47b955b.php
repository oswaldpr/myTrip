<?php
use App\Models\Flight;

/** @var  Flight $flight */

$airlineDefinition = $flight->airlineDefinition;
$departureDefinition = $flight->departureAirportDefinition;
$arrivalDefinition = $flight->arrivalAirportDefinition;

$delayedDayStr = $flight->delayedDay ? '+' . $flight->delayedDay : '';
$duration = $flight->duration;
$departureDateTime = $flight->departureDateTime;
$departureDate = Flight::getDateStr($departureDateTime);
$departureTime = Flight::getDateStr($departureDateTime);

$arrivalDateTime = $flight->arrivalDateTime;
$arrivalDate = Flight::getDateStr($arrivalDateTime);
$arrivalTime = Flight::getDateStr($arrivalDateTime);

$airlineName = $airlineDefinition->name . ' (' . $airlineDefinition->code . ')';
$flightName = $flight->airline . $flight->number;

$departureTime = $flight->departure_time;
$arrivalTime = $flight->arrival_time;
$departureAirportName = $departureDefinition->city . ' - ' . $departureDefinition->name . ' (' . $departureDefinition->code . ')';
$arrivalAirportName = $arrivalDefinition->city . ' - ' . $arrivalDefinition->name . ' (' . $arrivalDefinition->code . ')';
?>

<div class="result-flight-step-content">
    <div class="flight-info">
        <h5 class="single-info-title">Flight</h5>
        <div class="single-info-content">
            <?php echo $__env->make('templates.elements.displayElement', ['label' => 'Airline', 'value' => $airlineName], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('templates.elements.displayElement', ['label' => 'Flight number', 'value' => $flightName], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>

    <div class="departure-info">
        <h5 class="single-info-title">Departure</h5>
        <div class="single-info-content">
            <?php echo $__env->make('templates.elements.displayElement', ['label' => 'Date', 'value' => $departureDate], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('templates.elements.displayElement', ['label' => 'Time', 'value' => $departureTime], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('templates.elements.displayElement', ['label' => 'Airport', 'value' => $departureAirportName], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>

    <div class="arrival-info">
        <h5 class="single-info-title">Arrival</h5>
        <div class="single-info-content">
            <?php echo $__env->make('templates.elements.displayElement', ['label' => 'Date', 'value' => $arrivalDate], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('templates.elements.displayElement', ['label' => 'Time', 'value' => $arrivalTime], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('templates.elements.displayElement', ['label' => 'Airport', 'value' => $arrivalAirportName], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>

</div>

<?php /**PATH /home/oswald/devlocal/tripBuilder/src/resources/views/templates/resultFlight.blade.php ENDPATH**/ ?>
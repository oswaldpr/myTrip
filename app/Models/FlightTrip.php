<?php

namespace App\Models;

class FlightTrip
{
    /** @var  StraightFlightTrip $straightFlight */
    public $straightFlight;

    /** @var  StraightFlightTrip $returnFlight */
    public $returnFlight;

    /** @var  float $totalPrice */
    public $totalPrice;


    public function __construct($flightTripArray = array(), $returnFlightTripArray = array())
    {
        if(empty($flightTripArray) && empty($returnFlightTripArray)){
            //No flight found
            return null;
        }

        $returnFlight = null;
        $straightFlight = new StraightFlightTrip($flightTripArray);
        $totalPrice = $straightFlight->price;
        if(!empty($returnFlightTripArray)){
            $returnFlight = new StraightFlightTrip($returnFlightTripArray);
            $totalPrice = $totalPrice + $returnFlight->price;
        }

        $this->straightFlight = $straightFlight;
        $this->returnFlight = $returnFlight;
        $this->totalPrice = $totalPrice;

        return $this;
    }

}

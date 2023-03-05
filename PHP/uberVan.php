<?php
require_once('car.php');
class UberVan extends Car{

    public $typeCarAccepted;
    public $seatsMaterial;

    public function __construct($licence, $driver, $typeCarAccepted, $seatsMaterial)
    {
        parent::__construct($licence, $driver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seatsMaterial   = $seatsMaterial;
    }


    public function setPassenger($passenger) {
        if ($passenger == "6") {
            $this->passenger = $passenger;
        }else {
            echo "El numero de pasajero valido es 4";
        } 
    }

    public function printDataCar () {
        echo 'Licencia: ' . $this->license . '<br>';
        echo 'Conductor: ' . $this->driver->name . '<br>';
        echo 'Pasajeros van: ' . $this->getPassenger() . '<br>';

    }
}
?>
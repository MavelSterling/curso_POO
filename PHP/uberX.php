<?php
require_once("car.php");

class UberX extends Car{

    public $brand;
    public $model;



    public function __construct($licence, $driver, $brand, $model)
    {
        parent::__construct($licence, $driver);
        $this->brand = $brand;
        $this->model = $model;
    }

    public function setPassenger($passenger) {
        if ($passenger == "4") {
            $this->passenger = $passenger;
        }else {
            echo "El numero de pasajero valido es 4";
        } 
    }

    public function printDataCar () {
        echo 'Licencia: ' . $this->license . '<br>';
        echo 'Conductor: ' . $this->driver->name .  '<br>';
        echo 'Pasagero: ' . $this->passenger .  '<br>';

    }
}
?>
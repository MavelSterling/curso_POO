<code>
<?php
require_once('account.php');

class Car {

    private $id;
    protected $license;
    protected $driver;
    protected $passenger;


    public function __construct($licence, Account $driver)
    {
        $this->license = $licence;
        $this->driver  = $driver;
    }

    public function setPassenger($passenger) {
        $this->passenger = $passenger;
    }

    public function getPassenger() {
        return $this->passenger;
    }

    public function printDataCar () {
        echo 'Licencia: ' . $this->license . '<br>';
        echo 'Conductor: ' . $this->driver->name;

    }
}
?>
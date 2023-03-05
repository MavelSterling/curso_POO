<?php
require_once("car.php");
require_once("uberX.php");
require_once("account.php");
require_once("uberPool.php");
require_once("uberVan.php");

echo "Uberx

";
$uberX = new UberX("ABC123", new Account("Andres Herrera", "AND123"), "Chevrolet","Spark");
$uberX->setPassenger(4);
$uberX->printDataCar();

//$uberX = new UberX ("CVB123", new Account("Jose Ochoa", "190052 "),"", "");
//$uberX->setPassenger(4);
//$uberX->setModel("Sail");
//$uberX->setBrand("Chevrolet");
//$uberX->printDataCar();

echo "UberPool

";
$uberPool = new UberPool("ABC456", new Account("Andrea Herrera", "ANF123"), "Dodge","Attitude");
$uberPool->setPassenger(4);
$uberPool->printDataCar();
echo "UberVan

";
$uberVan = new UberVan("OJL456", new Account("Raul Ramirez", "AND456"), "Nissan", "Versa");
$uberVan -> setPassenger(6);
$uberVan -> printDataCar();
?>
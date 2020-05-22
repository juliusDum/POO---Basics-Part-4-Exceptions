<?php
require_once 'bicycle.php';
require_once 'car.php';
require_once 'trucks.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'skateboard.php';
require_once 'Speedometer.php';
//bicycle
$bike = new bicycle("red", 1);

//car
$car = new car("yellow", 4, "electric");

//trucks
$truck = new truck("purple", 2, "petrol", 100);

$route1 = new MotorWay();
$Porsche = new car("white", 4, "electric");
$Ferrari =  new car("red", 4, "electric");
$route1->addVehicule($Porsche);
$route1->addVehicule($Ferrari);


$route2 = new PedestrianWay();
$longboard = new skateboard("green", 1);
$tornado = new bicycle("blue", 1);
$route2->addVehicule($longboard);
$route2->addVehicule($tornado);


$route3 = new ResidentialWay();
$lapierre = new bicycle("yellow", 1);
$clio = new car ("purple", 4, "electric");
$loaded = new skateboard ("beige", 1);
$route3->addVehicule($lapierre);
$route3->addVehicule($clio);
$route3->addVehicule($loaded);

try {
    $car->start();
}catch (Exception $e){
    echo $e->getMessage();
    $car->setParkBrake();
} finally {
    echo "Ma voiture roule comme un donut.";
}



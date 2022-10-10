<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);
var_dump(Car::ALLOWED_ENERGIES);

$camion = new Truck('green', 4, 'electric', 80);
var_dump($camion);

echo $camion->isFull();
echo $camion->setLoad(99);
var_dump($camion);

echo $camion->setLoad(100);
var_dump($camion);

echo $camion->isFull();
echo $camion->setLoad(120);
var_dump($camion);
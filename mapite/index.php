<?php
require_once "Car.php";

$car = new Car("Red", "Toyota", 2023, "Hybrid");
echo $car->propulsionSystems[1]->work();
//http://localhost/mapite/index.php
?>
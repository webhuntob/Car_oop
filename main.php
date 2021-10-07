<?php
/*
*
*   Run script
*
*/

include 'Car.php';

$car = new Car('BMW', '1900', '1', '50');

$car->start();
$car->stop();
$car->down();
$car->up();


?>
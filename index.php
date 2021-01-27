<?php
include('Interface\IPrintOrder.php');
include('Interface\AbstractHandler.php');
include('EnginesTypeCarcaseCars.php');
include('EnginesTypeCars.php');
include('EnginesTypetTansmissionCars.php');
include('TypeCars.php');


$ordermanaher[]['TypeCars'] = 'PassengerCars';
$ordermanaher[]['EnginesTypeCars'] = 'EnginesTyp1';
$ordermanaher[]['EnginesTypeCarcaseCars'] = 'EnginesTypeCarcase1';
$ordermanaher[]['EnginesTypetTansmissionCars'] = 'EnginesTypetTansmission1';

for($i=count($ordermanaher)-1; $i >= 0; $i--) {


    $classname = key($ordermanaher[$i]);
    $metod = $ordermanaher[$i][$classname];
    if (class_exists($classname)) {
        $classHandle[$i]= new $classname($metod, $classHandle[$i]);
    }

}


$classHandle->parse();


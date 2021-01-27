<?php
/**
 * Created by PhpStorm.
 * User: berez
 * Date: 27.01.2021
 * Time: 2:04
 */

class TypeCars extends AbstractHandler
{
    protected $mesage;


    public function parse()
    {

        if( $this->canHandleMetod() ){
            $metod = $this->metodName;
            $this->$metod();
            $this->writer();
        }

        parent::parse();

    }

    public function PassengerCars()
    {
        //
        $this->mesage = 'setPassengerCars';
        parent::$writerPrint[] = 'setPassengerCars';
    }

    public function Truck()
    {
        //
        $this->mesage = 'setTruck';
        parent::$writerPrint[] = 'setTruck';
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: berez
 * Date: 27.01.2021
 * Time: 3:01
 */

class EnginesTypeCarcaseCars extends AbstractHandler
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

    public function EnginesTypeCarcase1(){
        $this->mesage = 'EnginesTypeCarcase1';
        parent::$writerPrint[] = 'EnginesTypeCarcase1';
    }

    public function EnginesTypeCarcase2(){
        $this->mesage = 'EnginesTypeCarcase1';
        parent::$writerPrint[] = 'EnginesTypeCarcase1';
    }

    public function EnginesTypeCarcase3(){
        $this->mesage = 'EnginesTypeCarcase1';
        parent::$writerPrint[] = 'EnginesTypeCarcase1';
    }
}
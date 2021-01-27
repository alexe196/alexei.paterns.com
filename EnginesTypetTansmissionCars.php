<?php
/**
 * Created by PhpStorm.
 * User: berez
 * Date: 27.01.2021
 * Time: 3:04
 */

class EnginesTypetTansmissionCars extends AbstractHandler
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

    public function EnginesTypetTansmission1(){
        $this->mesage = 'EnginesTypetTansmission1';
        parent::$writerPrint[] = 'EnginesTypetTansmission1';
    }

    public function EnginesTypetTansmission2(){
        $this->mesage = 'EnginesTypetTansmission2';
        parent::$writerPrint[] = 'EnginesTypetTansmission2';
    }

    public function EnginesTypetTansmission3(){
        $this->mesage = 'EnginesTypetTansmission3';
        parent::$writerPrint[] = 'EnginesTypetTansmission3';
    }}
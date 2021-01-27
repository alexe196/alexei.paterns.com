<?php
/**
 * Created by PhpStorm.
 * User: berez
 * Date: 27.01.2021
 * Time: 2:09
 */

class EnginesTypeCars extends AbstractHandler
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

     public function EnginesTyp1(){
         $this->mesage = 'EnginesTyp1';
         parent::$writerPrint[] = 'EnginesTyp1';
     }

    public function EnginesTyp2(){
        $this->mesage = 'EnginesTyp2';
        parent::$writerPrint[] = 'EnginesTyp2';
    }

    public function EnginesTyp3(){
        $this->mesage = 'EnginesTyp3';
        parent::$writerPrint[] = 'EnginesTyp3';
    }


}
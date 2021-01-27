<?php
/**
 * Created by PhpStorm.
 * User: berez
 * Date: 27.01.2021
 * Time: 2:17
 */

abstract class AbstractHandler implements IPrintOrder
{
    public static $writerPrint = [];
    protected $successor;
    protected $metodName;
    protected $mesage;

    public function __construct($metodName, AbstractHandler $successor = null)
    {
        $this->successor = $successor;
        $this->metodName = $metodName;
    }

    public function parse()
    {
        $successor = $this->getSuccessor();

        if (!is_null($successor)) {
            $successor->parse($successor);
        } else {
            print("Unable to find the correct");
        }
    }

    public function canHandleMetod()
    {
        return method_exists(get_class($this),$this->metodName) ? true : false;
    }

    public function getSuccessor()
    {
        return $this->successor;
    }

    public function writer()
    {
        $this->log($this->message);
    }

    private function log($message){
        //запись логов
    }
}
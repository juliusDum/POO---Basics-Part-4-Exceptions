<?php
require_once 'HighWay.php';
require_once 'car.php';
final class MotorWay extends HighWay
{
    protected $nbLane = 4;
    protected $maxSpeed = 130;
    public function getNbLane()
    {
        return $this->nbLane;
    }
    public function setNbLane($nbLane)
    {
        return $this->nbLane = $nbLane;
    }
    public function getMaxSpeed(){
        return $this->maxSpeed;
    }
    public function setMaxSpeed($maxSpeed)
    {
        return $this->maxSpeed = $maxSpeed;
    }
    public function addVehicule($param)
    {
        if ($param instanceof Car) {
            $this->currentVehicule[] = $param;
        }
    }
}
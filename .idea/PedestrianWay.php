<?php
require_once 'bicycle.php';
final class PedestrianWay extends HighWay
{
    protected $nbLane = 1;
    protected $maxSpeed = 10;
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
        if ($param instanceof Bicycle || $param instanceof Skateboard)
        {
            $this->currentVehicule[] = $param;
        }
    }
}
<?php
abstract class HighWay
{
 protected $currentVehicles = [];
 private $nbLane;
 private $maxSpeed;

    public function getcurrentVehicles()
    {
    return $this->currentVahicles;
    }
    public function setcurrentVehicles($currentVehicules)
    {
        return $this->currentVahicles = $currentVehicles;
    }
    public function getNbLane()
    {
        return $this->nbLane;
    }
    public function setNbLane($nbLane)
    {
        return $this->nbLane = $nbLane;
    }
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }
    public function setMaxSpeed($maxSpeed)
    {
        return $this->maxSpeed = $maxSpeed;
    }
    abstract protected function addVehicule($param);
}

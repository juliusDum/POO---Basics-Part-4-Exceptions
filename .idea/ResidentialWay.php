<?php
require_once 'vehicle.php';
final class ResidentialWay extends HighWay
{
    protected $nbLane = 2;
    protected $maxSpeed = 50;
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
    public function addVehicule($param)
    {
        if ($param instanceof Vehicle) {
            $this->currentVehicule[] = $param;
        }
    }
}
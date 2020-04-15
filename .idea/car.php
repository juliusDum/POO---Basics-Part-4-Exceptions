<?php
//car.php
require_once 'vehicle.php';
final class Car extends Vehicle{
   const ALLOWED_ENERGIES= [
       'fuel',
       'electric',
   ];
    private $energy;
    private $fuelLevel;

    private $hasParkBrake = false;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color,$nbSeats);
        $this->setEnergy($energy);

    }
    public function getEnergy()
    {
        return $this->energy;
    }
    public function setEnergy(string $energy): car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
    public function getfuelLevel()
    {
        return $this->fuelLevel;
    }
    public function setfuelLevel(int $fuelLevel): void
    {
        $this->fuelLevel = $fuelLevel;
    }
    public function setParkBrake()
    {
        if ($this->hasParkBrake == false){
            $this->hasParkBrake = true;
        } else{
            $this->hasParkBrake = false;
        }
    }
    public function start()
    {
        if ($this->hasParkBrake){
            throw new Exception("il faut enlever le frain à main!");
        }
    }
}
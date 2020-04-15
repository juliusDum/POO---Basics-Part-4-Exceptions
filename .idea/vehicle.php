<?php
// vehicle.php
abstract class Vehicle
{
    protected $color;
    protected $currentSpeed;
    protected $nbSeats;
    protected $nbWheels;

    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }
    public function start()
    {
        $this->currentSpeed;
        return "Go!";
    }
    public function forward(): string
    {
        $sentence = "";
        return $sentence .= "Brake!!! ";
    }
    public function brake(): string
    {
        $sentence = "";
        return $sentence .= "I'm stopped";
    }
    public function getColor(): string{
        return $this->color;
    }
    public function getCurrentSpeed($currentSpeed): int
    {
        return $this->currentSpeed = $currentSpeed;
    }
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0)
        {
            $this->currentSpeed = $currentSpeed;
        }
    }
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }
    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }
}



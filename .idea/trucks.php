<?php
require_once 'vehicle.php';
final class Truck extends Vehicle{
    const ALLOWED_ENERGIES= [
        'fuel',
        'petrol',
    ];

    private $energy;
    private $fuelLevel;
    private $capacity;
    private $load;

    public function __construct(string $color, int $nbSeats, string $energy, int $capacity)
    {
        parent::__construct($color,$nbSeats);
        $this->setEnergy($energy);
        $this->capacity = $capacity;

    }
    public function getEnergy()
    {
        return $this->energy;
    }
    public function setEnergy(string $energy): truck
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
    public function getCapacity(): int
    {
        return $this->capacity;
    }

    /**
     * @param int $capacity
     */
    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }
    public function getLoad(): string
    {
        if ($this->load >= $this->capacity) {
            return 'full';
        } else {
            return 'in filling';
        }
    }
        public function setLoad(int $load): void
        {
            $this->load = $load;
        }
    }

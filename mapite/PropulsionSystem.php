<?php
abstract class PropulsionSystem {
    public float $power;
    public string $fuelType;
    protected float $efficiency;

    public function __construct(float $power, string $fuelType, float $efficiency) {
        $this->power = $power;
        $this->fuelType = $fuelType;
        $this->efficiency = $efficiency;
    }

    abstract public function work(): string;
}
?>
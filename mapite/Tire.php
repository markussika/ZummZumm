<?php
class Tire {
    public float $pressure;
    public float $size;

    public function __construct(float $pressure, float $size) {
        $this->pressure = $pressure;
        $this->size = $size;
    }
}
?>
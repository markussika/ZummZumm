<?php
require_once "Tire.php";
require_once "ICEngine.php";
require_once "ElectricMotor.php";

class Car {
    public string $color;
    public string $brand;
    private int $releaseYear;
    private string $propulsionType;
    private array $tires = [];
    public array $propulsionSystems = [];

    public function __construct(string $color, string $brand, int $releaseYear, string $propulsionType) {
        $this->color = $color;
        $this->brand = $brand;
        $this->releaseYear = $releaseYear;
        $this->propulsionType = $propulsionType;

        for ($i = 0; $i < 4; $i++) {
            $this->tires[] = new Tire(32.0, 18.0);
        }

        if ($propulsionType === "ICE") {
            $this->propulsionSystems[] = new ICEngine(150, "Petrol", 0.3, 2.0, 4);
        } elseif ($propulsionType === "Electric") {
            $this->propulsionSystems[] = new ElectricMotor(200, "Electricity", 0.9);
        } elseif ($propulsionType === "Hybrid") {
            $this->propulsionSystems[] = new ICEngine(100, "Petrol", 0.3, 1.5, 4);
            $this->propulsionSystems[] = new ElectricMotor(150, "Electricity", 0.9);
        }
    }

    public function move(): void {
        echo "The car is moving." . PHP_EOL;
    }

    public function makeNoise(): string {
        return "Beep, beep!";
    }
}

?>


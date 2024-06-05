<?php
// Ecosystem.php
require_once 'Animal.php';
require_once 'Plant.php';
require_once 'Insect.php';

class Ecosystem
{
    private $animals = [];
    private $plants = [];
    private $insects = [];

    public function addAnimal(Animal $animal)
    {
        $this->animals[] = $animal;
    }

    public function addPlant(Plant $plant)
    {
        $this->plants[] = $plant;
    }

    public function addInsect(Insect $insect)
    {
        $this->insects[] = $insect;
    }

    public function listAnimals()
    {
        foreach ($this->animals as $animal) {
            echo "Animal: " . $animal->getSpecies() . ", Sound: " . $animal->makeSound() . "\n";
        }
    }

    public function listPlants()
    {
        foreach ($this->plants as $plant) {
            echo "Plant: " . $plant->getSpecies() . ", Height: " . $plant->getHeight() . " cm\n";
        }
    }

    public function listInsects()
    {
        foreach ($this->insects as $insect) {
            echo "Insect: " . $insect->getSpecies() . ", Wing Span: " . $insect->getWingSpan() . " cm\n";
        }
    }
}

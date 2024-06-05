<?php
// Animal.php
class Animal
{
    private $species;
    private $sound;

    public function __construct($species, $sound)
    {
        $this->species = $species;
        $this->sound = $sound;
    }

    public function makeSound()
    {
        return $this->sound;
    }

    public function getSpecies()
    {
        return $this->species;
    }
}

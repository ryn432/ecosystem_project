<?php
// Insect.php
class Insect
{
    private $species;
    private $wingSpan;

    public function __construct($species, $wingSpan)
    {
        $this->species = $species;
        $this->wingSpan = $wingSpan;
    }

    public function fly()
    {
        return "{$this->species} is flying.";
    }

    public function getWingSpan()
    {
        return $this->wingSpan;
    }

    public function getSpecies()
    {
        return $this->species;
    }
}

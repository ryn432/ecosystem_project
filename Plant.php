<?php
// Plant.php
class Plant
{
    private $species;
    private $height;

    public function __construct($species, $height)
    {
        $this->species = $species;
        $this->height = $height;
    }

    public function grow($amount)
    {
        $this->height += $amount;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getSpecies()
    {
        return $this->species;
    }
}

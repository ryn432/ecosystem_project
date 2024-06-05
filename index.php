<?php
// index.php
require_once 'Ecosystem.php';

// Create some animals
$lion = new Animal("Lion", "Roar");
$elephant = new Animal("Elephant", "Trumpet");

// Create some plants
$oakTree = new Plant("Oak Tree", 500);
$sunflower = new Plant("Sunflower", 150);

// Create some insects
$butterfly = new Insect("Butterfly", 10);
$bee = new Insect("Bee", 1);

// Create an ecosystem
$ecosystem = new Ecosystem();

// Add entities to the ecosystem
$ecosystem->addAnimal($lion);
$ecosystem->addAnimal($elephant);

$ecosystem->addPlant($oakTree);
$ecosystem->addPlant($sunflower);

$ecosystem->addInsect($butterfly);
$ecosystem->addInsect($bee);

// List all entities
$ecosystem->listAnimals();
$ecosystem->listPlants();
$ecosystem->listInsects();

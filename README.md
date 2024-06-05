# Ecosystem Project

This project models a typical ecosystem using PHP, demonstrating object-oriented programming (OOP) concepts. The ecosystem consists of three types of entities: Animals, Plants, and Insects.

## Project Structure

/ecosystem_project
├── index.php
├── Animal.php
├── Plant.php
├── Insect.php
└── Ecosystem.php


## Classes

### Animal

Represents an animal in the ecosystem.

- Properties: `species`, `sound`
- Methods:
  - `__construct($species, $sound)`: Initializes the animal with a species and a sound.
  - `makeSound()`: Returns the sound of the animal.
  - `getSpecies()`: Returns the species of the animal.

### Plant

Represents a plant in the ecosystem.

- Properties: `species`, `height`
- Methods:
  - `__construct($species, $height)`: Initializes the plant with a species and a height.
  - `grow($amount)`: Increases the height of the plant.
  - `getHeight()`: Returns the height of the plant.
  - `getSpecies()`: Returns the species of the plant.

### Insect

Represents an insect in the ecosystem.

- Properties: `species`, `wingSpan`
- Methods:
  - `__construct($species, $wingSpan)`: Initializes the insect with a species and a wing span.
  - `fly()`: Returns a string indicating the insect is flying.
  - `getWingSpan()`: Returns the wing span of the insect.
  - `getSpecies()`: Returns the species of the insect.

### Ecosystem

Manages the ecosystem and its entities.

- Properties:
  - `animals`: An array of Animal objects.
  - `plants`: An array of Plant objects.
  - `insects`: An array of Insect objects.
- Methods:
  - `addAnimal(Animal $animal)`: Adds an animal to the ecosystem.
  - `addPlant(Plant $plant)`: Adds a plant to the ecosystem.
  - `addInsect(Insect $insect)`: Adds an insect to the ecosystem.
  - `listAnimals()`: Lists all animals in the ecosystem.
  - `listPlants()`: Lists all plants in the ecosystem.
  - `listInsects()`: Lists all insects in the ecosystem.

## Running the Project

To run this project, use PHP's built-in server:

```sh
php -S localhost:8000

Navigate to http://localhost:8000/index.php in your web browser to see the output.
```
## Example Output
Animal: Lion, Sound: Roar
Animal: Elephant, Sound: Trumpet
Plant: Oak Tree, Height: 500 cm
Plant: Sunflower, Height: 150 cm
Insect: Butterfly, Wing Span: 10 cm
Insect: Bee, Wing Span: 1 cm

## License
This project is licensed under the MIT License - see the LICENSE file for details.


### Instructions to Add README.md to Your Project

1. **Create README.md**:
    - Create a file named `README.md` in the root directory of your project.

2. **Add Content to README.md**:
    - Copy and paste the above content into the `README.md` file.

3. **Add, Commit, and Push README.md**:
    - Open your terminal and navigate to your project directory.
    - Add the README file to your Git repository:
        ```sh
        git add README.md
        ```
    - Commit the changes:
        ```sh
        git commit -m "Add README file"
        ```
    - Push the changes to GitHub:
        ```sh
        git push origin master
        ```

By following these steps, your project will now include a detailed `README.md` file that explains the purpose and structure of the project, how to run it, and what output to expect. This makes your project more understandable and accessible to others.

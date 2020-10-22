<?php

class DogTest
{
    private array $dogs;

    public function __construct()
    {
        $this->dogs = [
            new Dog('Max', 'male', 'Lady', 'Rocky'),
            new Dog('Rocky', 'male', 'Molly', 'Sam'),
            new Dog('Sparky', 'male'),
            new Dog('Buster', 'male', 'Lady', 'Sparky'),
            new Dog('Sam', 'male'),
            new Dog('Lady', 'female'),
            new Dog('Molly', 'female'),
            new Dog('Coco', 'female', 'Molly', 'Buster'),
        ];
    }

    public function getDogByName(string $name): ?Dog
    {
        /** @var Dog $dog */
        foreach ($this->dogs as $dog) {
            if ($dog->getName() === $name) {
                return $dog;
            }
        }
        return null;
    }

    public function getFathersNameByDogName(string $name): string
    {
        $father = $this->getDogByName($name);
        if ($father != null) {
            return $father->getFathersName();
        } else {
            return 'No dog with that name';
        }
    }

    public function tests(): void
    {
        echo $this->getFathersNameByDogName('Coco') . PHP_EOL;
        echo $this->getFathersNameByDogName('Sparky') . PHP_EOL;

        if ($this->getDogByName('Coco')->hasSameMotherAs($this->getDogByName('Rocky'))) {
            echo 'true' . PHP_EOL;
        } else {
            echo 'false' . PHP_EOL;
        }
    }
}
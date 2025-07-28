<?php
class Animal
{
    public $name;
    public function makeSound() {}
}
class Dog extends Animal
{
    public function makeSound()
    {
        echo "name: $this->name <br> sound: woof";
    }
}
$animal = new Dog();
$animal->name = "dog";
$animal->makeSound();

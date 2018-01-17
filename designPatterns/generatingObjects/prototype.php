<?php

class Car
{
}
class BigCar extends Car
{
}
class SamllCar extends Car
{
}
class Home
{
}
class BigHome extends Home
{
}
class SmallHome extends Home
{
}

class Factory
{
    private $car;
    private $home;

    public function __construct(Car $car, Home $home )
    {
        $this->car = $car;
        $this->home = $home;
    }
    public function getCar(): Car
    {
        return clone $this->car;
    }
    public function getHome(): Home
    {
        return clone $this->home;
    }
}

$factory = new Factory(
    new BigCar(),
    new SmallHome()
);
print_r($factory->getCar());
print_r($factory->getHome());

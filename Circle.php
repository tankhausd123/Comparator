<?php


class Circle
{
public $name;
public $radius;
public function __construct($name, $radius)
{
    $this->name = $name;
    $this->radius = $radius;
}

    public function getName()
    {
        return $this->name;
    }
    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getRadius()
    {
        return $this->radius;
    }
    public function setRadius($radius): void
    {
        $this->radius = $radius;
    }
}
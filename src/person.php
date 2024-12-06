<?php

namespace App;

class person
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->setAge($age);
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        if ($age < 0 || $age > 150) {
            throw new \OutOfRangeException("Возраст должен быть в пределах от 0 до 150 лет.");
        }
        $this->age = $age;
    }
}

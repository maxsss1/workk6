<?php

namespace App;

class person
{
    private $name;
    private $age;

    // Конструктор класса
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->setAge($age); // Устанавливаем возраст через метод setAge
    }

    // Метод для получения имени
    public function getName()
    {
        return $this->name;
    }

    // Метод для получения возраста
    public function getAge()
    {
        return $this->age;
    }

    // Метод для установки возраста с проверкой
    public function setAge($age)
    {
        if ($age < 0 || $age > 150) {
            throw new \OutOfRangeException("Возраст должен быть в пределах от 0 до 150 лет.");
        }
        $this->age = $age;
    }
}

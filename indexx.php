<?php

require __DIR__ . '/vendor/autoload.php';

use App\Person;

function getUserInput($prompt)
{
    echo $prompt;
    return trim(fgets(STDIN)); // Получаем строку с клавиатуры и удаляем лишние пробелы
}

try {
    $name = getUserInput("Введите имя: ");
    $age = (int) getUserInput("Введите возраст: "); // Преобразуем введенный возраст в число

    $person = new Person($name, $age);
    echo "Имя: " . $person->getName() . ", Возраст: " . $person->getAge() . "\n";

} catch (\OutOfRangeException $e) {
    echo "Ошибка: " . $e->getMessage() . "\n";
}


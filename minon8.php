<?php

function printUserInfo($name, $age) {
    echo "<p>Имя пользователя: $name</p>";
    echo "<p>Возраст пользователя: $age</p>";
}

// Пример использования функции
$name = "Иван";
$age = 30;
printUserInfo($name, $age);

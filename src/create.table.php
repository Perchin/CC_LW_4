<?php
//Подключится к базе данных
require_once "connect.pg.inc.php";
//Если такая таблица есть, удалить ее
$sql = "DROP TABLE IF EXISTS books CASCADE";
$pdo->query($sql);

//Создание таблицы
$sql = "
CREATE TABLE books (
    id SERIAL PRIMARY KEY,
    genre TEXT NOT NULL,
    title TEXT NOT NULL,
    rating float NOT NULL,
    price float NOT NULL
)";

$pdo->query($sql);
//Занесение данных
$sql = "
INSERT INTO books VALUES (1, 'Классика', 'Вишневый сад', 4, 4324), (2, 'Классика', 'Отцы и дети', 5, 3153),
(3, 'Ужасы', 'Оно', 2, 3999), (4, 'Сказки', 'Сказка о рыбаке и рыбке', 1, 1500), (5, 'Детектив', 'Убийство в Восточном экспрессе', 2, 2420)
";
$pdo->query($sql);
//Закрыть подключение к базе данных
$pdo = null;
?>
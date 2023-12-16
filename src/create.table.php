<?php
//Подключится к базе данных
require_once "connect.pg.inc.php";
//Если такая таблица есть, удалить ее
$sql = "DROP TABLE IF EXISTS games CASCADE";
$pdo->query($sql);

//Создание таблицы
$sql = "
CREATE TABLE games (
    id SERIAL PRIMARY KEY,
    genre TEXT NOT NULL,
    title TEXT NOT NULL,
    rating float NOT NULL,
    price float NOT NULL
)";

$pdo->query($sql);
//Занесение данных
$sql = "
INSERT INTO games VALUES (1, 'horror', 'Spooky game', 4, 4324), (2, 'Survival', 'ARK', 5, 3153),
(3, 'Adventure', 'Zelda', 2, 3999), (4, 'MOBA', 'Dota', 1, 1500), (5, 'RPG', 'Alloda', 2, 2420)
";
$pdo->query($sql);
//Закрыть подключение к базе данных
$pdo = null;
?>
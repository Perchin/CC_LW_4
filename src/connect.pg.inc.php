<?php
$db["host"] = "postgres";
$db["port"] = "5432";
$db["user"] = "admin";
$db["pass"] = "root";
$db["dbname"] = "games";
$pdo = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    $db["dbname"]
));
<html>

<head>
    <title>Каталог игр</title>
</head>

<body>
    <h2>Каталог игр</h2>
    <table border="1" cellpadding="5" cellspacing="1" width="100%">
        <tr>
            <th>Жанр</th> 
            <th>Название</th>
            <th>Рейтинг</th>
            <th>Цена</th>
        </tr>
        <?php
            require_once "connect.pg.inc.php";
            $sql = "SELECT * FROM games";
            $sta = $pdo->query($sql);
            while ($row = $sta->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <tr>
            <td align="center"><?php echo $row["genre"] ?></td>
            <td align="center"><?php echo $row["title"] ?></td>
            <td align="center"><?php echo $row["rating"]?></td>
            <td align="center"><?php echo $row["price"]?></td>
        </tr>
        <?php
            }
            $pdo = null;
        ?>
    </table>
</body>

</html>
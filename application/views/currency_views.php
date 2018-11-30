<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Валюта</td>
            <td>Значение</td>
            <td>Дата</td>
        </tr>

        <?php foreach ($currency as $item): ?>
        <tr>
            <td><?=$item['currency']?></td>
            <td><?=$item['value']?></td>
            <td><?=$item['date']?></td>
        </tr>
        <?php endforeach; ?>
    </table>
<a href="http://localhost/CodeIgniter-3.1.9/index.php/">Назад</a>
</body>
</html>
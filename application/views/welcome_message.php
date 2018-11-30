<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>

<div id="container">

	<div id="body">
        <table border="1">
            <tr>
                <td colspan="2">Курс валют на: <?=date('Y-m-d')?></td>
            </tr>
            <tr>
                <td>Доллар</td>
                <td><?=$usd?></td>
            </tr>
            <tr>
                <td>Евро</td>
                <td><?=$eur?></td>
            </tr>
        </table>
	</div>
    <a href="http://localhost/CodeIgniter-3.1.9/index.php/welcome/currency"> История курса валют</a>
</div>

</body>
</html>
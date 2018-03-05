<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
<?php

$db['server'] = 'localhost';
$db['user'] = 'root';
$db['password'] = 'lepo';
//estabele os parâmetros da conexao requerida
$conn = mysql_connect ($db['server'],$db['user'],$db['password']) or print(mysql_error());
mysql_select_db("protocoloproace2018") or die(mysql_error());

?>
</body>
</html>
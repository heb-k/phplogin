<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = 'Mikasa.fofa';
$banco = 'testebanco';

//conecta ao banco de dados mySQL
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);

//caso algo tenha dado errado, exibe uma mensagem de erro:
if (mysqli_connect_errno()) trigger_error(mysqli_conect_error());

?>
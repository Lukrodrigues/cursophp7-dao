<?php

require_once("config.php");

$sql = new sql();

$usuarios = $sql->select("SELECT * From tb_usuarios");

echo json_encode($usuarios);

?>
<?php

require_once("config.php");

$luk = new Usuario();

$luk->loadbyId(3);

echo $luk;

//$sql = new sql();

//$usuarios = $sql->select("SELECT * From tb_usuarios");

//echo json_encode($usuarios);

?>
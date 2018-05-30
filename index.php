<?php

require_once("config.php");



//Carrega um usuario
//$luk = new Usuario();
//$luk->loadbyId(3);
//echo $luk;

// mostra  tabela usuario
//$sql = new sql();
//$usuarios = $sql->select("SELECT * From tb_usuarios");
//echo json_encode($usuarios);

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuario usando login e a senha
$usuario = new Usuario();
$usuario->login("jose", "1234567890");

echo $usuario;


?>
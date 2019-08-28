<?php

require_once("config.php");

/*

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

*/

/* 
$root = new Usuario();

$root->loadbyId(9);

echo $root;

*/

/*
// Lista de usuários

$lista = Usuario::getList();  // posso usar assim porque essa função é estatica. Não é preciso instanciar. 

echo json_encode($lista);

*/

/*
$search = Usuario::search("jo");
echo json_encode($search);

*/

// carrega usuário usando logi e senha 

$usuario = new Usuario();
$usuario->login("user2", "12345678");

echo $usuario;

?>
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

/*
// carrega usuário usando logi e senha 

$usuario = new Usuario();
$usuario->login("user2", "12345678");

echo $usuario;

*/

/*
$aluno = new Usuario();

$aluno->SetDeslogin("aluno");
$aluno->setDessenha("@lun0");

$aluno->insert();

echo $aluno;
*/ 

/* criando um novo usuário
$aluno = new Usuario("aluno", "12345");

$aluno->insert();

echo $aluno;
*/ 


$usuario = new Usuario();

$usuario->loadbyId(8);

$usuario->update("professor", "12345678");

echo $usuario;


?>
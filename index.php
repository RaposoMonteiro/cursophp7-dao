<?php

require_once("config.php");

$usuario = new Usuario();

$usuario -> loadById(10);

$usuario -> update("professor", "963852741");

echo $usuario;
/* Criando um novo usuário
$aluno = new Usuario("aluno", "@lun0");

$aluno -> insert();

echo $aluno;*/



/*Carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario -> login("root", "123456");

echo $usuario;*/

/*Carrega uma lista de usuários buscando pelo login
$search = Usuario::search("o");

echo json_encode($search);*/

/*Carrega uma lista de usuários
$lista = Usuario::getList();

echo json_encode($lista);*/

/*Carrega um usuario
$root = new Usuario();
$root->loadbyId(3);
echo $root;*/

/*
$sql = new Sql();
$usuarios = $sql -> select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

?>
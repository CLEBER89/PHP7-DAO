<?php 
	
	require_once("config.php");

	//Carrega 1 usuário
	//$root = new Usuario();
	//$root->loadByid(2);

	//echo $root;

	//Carrega uma lista de usuários
	//$lista = Usuario::getlist();

	//echo json_encode($lista);

	//Carrega umas lista de usuários buscando pelo login
	//$search = Usuario::search("j");

	//echo json_encode($search);

	//Carrega um usuários usando login e senha
	$usuario = new Usuario();
	$usuario->login("cleber", "123456");

	echo $usuario;



	/*$sql = new Sql();

	$usuarios = $sql->select("SELECT * FROM tb_usuarios");

	echo json_encode($usuarios);*/

 ?>
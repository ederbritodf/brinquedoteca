<?php 

include 'db.php';

$usuario = addcslashes($_POST['usuario']);
$senha = md5($_POST['senha']);

$query = "SELECT * FROM USUARIOS WHERE USUARIO='$usuario' and SENHA=$senha";

/*print($query);
exit();
*/
$consulta = mysqli_query($conexao, $query);

if(mysqli_num_rows($consulta) == 0 ){

	session_start();
		$_SESSION['login'] = true;
		$_SESSION['usuario'] = $usuario;
	header('location:index.php');
		} else {
		header('location:index.php?=erro');
	}


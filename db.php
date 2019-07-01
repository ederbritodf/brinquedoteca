<?php

$servidor = "";
$usuario = "";
$senha = "";
$database = "";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

$query = "SELECT *FROM ALUNO";
$consulta_aluno = mysqli_query($conexao, $query);

$query = "SELECT *FROM RESPONSAVEL";
$consulta_responsavel = mysqli_query($conexao, $query);



$query = "SELECT ALUNO_RESPONSAVEL.id_aluno_responsavel, ALUNO.nome_aluno, RESPONSAVEL.nome_responsavel 
			FROM ALUNO, RESPONSAVEL, ALUNO_RESPONSAVEL 
			WHERE ALUNO_RESPONSAVEL.id_aluno = ALUNO.id_aluno 
			AND ALUNO_RESPONSAVEL.id_responsavel = RESPONSAVEL.id_responsavel";
$consulta_aluno_responsavel = mysqli_query($conexao, $query);




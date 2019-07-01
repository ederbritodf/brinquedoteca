<?php

include 'db.php';

$nome_aluno = $_POST['nome_aluno'];
$dn_aluno = $_POST['dn_aluno'];
$sexo_aluno = $_POST['sexo_aluno'];
$pai_aluno = $_POST['pai_aluno'];
$mae_aluno = $_POST['mae_aluno'];
$descricao_aluno = $_POST['descricao_aluno'];


$query = "INSERT INTO ALUNO(nome_aluno, dn_aluno, sexo_aluno, pai_aluno, mae_aluno, descricao_aluno) VALUES('$nome_aluno', '$dn_aluno', '$sexo_aluno', '$pai_aluno', '$mae_aluno', '$descricao_aluno')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=consulta_aluno');
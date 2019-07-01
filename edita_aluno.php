<?php

include 'db.php';
$id_aluno = $_POST['id_aluno'];
$nome_aluno = $_POST['nome_aluno'];
$dn_aluno = $_POST['dn_aluno'];
$sexo_aluno = $_POST['sexo_aluno'];
$pai_aluno = $_POST['pai_aluno'];
$mae_aluno = $_POST['mae_aluno'];
$descricao_aluno = $_POST['descricao_aluno'];

$query = "UPDATE ALUNO SET nome_aluno='$nome_aluno', dn_aluno='$dn_aluno', sexo_aluno='$sexo_aluno', pai_aluno='$pai_aluno', mae_aluno='$mae_aluno', descricao_aluno='$descricao_aluno' WHERE id_aluno = $id_aluno";

mysqli_query($conexao, $query);

header('location:index.php?pagina=consulta_aluno');



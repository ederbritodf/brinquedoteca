<?php

include 'db.php';

$id_aluno = $_POST['escolha_aluno'];
$id_responsavel = $_POST['escolha_responsavel'];

$query = "INSERT INTO ALUNO_RESPONSAVEL(id_aluno, id_responsavel) VALUES($id_aluno, $id_responsavel)";

mysqli_query($conexao, $query);

header('location:index.php?pagina=consulta_aluno_responsavel');

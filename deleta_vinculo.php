<?php

include 'db.php';

$id_aluno_responsavel = $_GET['id_aluno_responsavel'];

$query = "DELETE FROM ALUNO_RESPONSAVEL WHERE id_aluno_responsavel = $id_aluno_responsavel";
mysqli_query ($conexao, $query);

header('location:index.php?pagina=consulta_aluno_responsavel');

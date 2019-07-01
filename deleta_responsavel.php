<?php

include 'db.php';

$id_responsavel = $_GET['id_responsavel'];

$query = "DELETE FROM RESPONSAVEL WHERE id_responsavel = $id_responsavel";
mysqli_query ($conexao, $query);

header('location:index.php?pagina=consulta_responsavel');

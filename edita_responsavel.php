<?php

include 'db.php';
$id_responsavel = $_POST['id_responsavel'];
$nome_responsavel = $_POST['nome_responsavel'];
$cpf_responsavel = $_POST['cpf_responsavel'];
$mat_responsavel = $_POST ['mat_responsavel'];
$email_responsavel = $_POST ['email_responsavel'];
$tel1_responsavel = $_POST ['tel1_responsavel'];
$tel2_responsavel = $_POST ['tel2_responsavel'];
$end_responsavel = $_POST ['end_responsavel'];
$cep_responsavel = $_POST ['cep_responsavel'];
$cidade_responsavel = $_POST ['cidade_responsavel'];
$uf_responsavel = $_POST ['uf_responsavel'];
$desc_responsavel = $_POST ['desc_responsavel'];

$query = "UPDATE RESPONSAVEL SET nome_responsavel='$nome_responsavel', cpf_responsavel='$cpf_responsavel', mat_responsavel='$mat_responsavel', email_responsavel='$email_responsavel', tel1_responsavel='$tel1_responsavel', tel2_responsavel='$tel2_responsavel', end_responsavel='$end_responsavel', cep_responsavel='$cep_responsavel', cidade_responsavel='$cidade_responsavel', uf_responsavel='$uf_responsavel', desc_responsavel='$desc_responsavel' WHERE id_responsavel = $id_responsavel";

mysqli_query($conexao, $query);

header('location:index.php?pagina=consulta_responsavel');



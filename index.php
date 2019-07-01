<?php
#Iniciar sessao
session_start();

include 'db.php';

#Cabeçalho
include 'header.php';

#Conteudo da pagina

 if(isset($_SESSION['login'])){
	if(isset($_GET['pagina'])){
		$pagina = $_GET['pagina'];
	} 
	else {
		$pagina = 'consultar';
	}
}
else {
	$pagina = 'home';
}

switch ($pagina) {
	# Sessão views
	case 'aluno': include 'views/aluno.php'; break;
	case 'consulta_aluno': include 'views/consulta_aluno.php'; break;
	case 'inserir_aluno_responsavel': include 'inserir_aluno_responsavel.php'; break;
	case 'inserir_aluno': include 'inserir_aluno.php'; break;

	case 'responsavel': include 'views/responsavel.php'; break;
	case 'consulta_responsavel': include 'views/consulta_responsavel.php'; break;
	case 'inserir_responsavel': include 'inserir_responsavel.php'; break;

	case 'consultar': include 'views/consultar.php'; break;
	case 'consulta_aluno_responsavel': include 'views/consulta_aluno_responsavel.php'; break;
	case 'detalhe_responsavel': include 'views/detalhe_responsavel.php'; break;
	default: include 'views/home.php'; break;

}

#Rodape
include 'footer.php';

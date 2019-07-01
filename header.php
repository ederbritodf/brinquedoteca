<?php 
/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);

/* Habilita a exibição de erros */
ini_set("display_errors", 1);
?>

<!DOCTYPE html>
<html>
<head>
                <title> Sistema de Cadastro :: Brinquedoteca </title>
                <meta charset="UTF-8">
                <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
                <link rel="stylesheet" type="text/css" href="css/estilo.css">
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

                <body>

        <header>
        <div class="container">
        <a href="?pagina=consultar"><img src="img/logo.svg" width="100px" height="70px" title="Logo" alt="Logo"></a>
        <div class="btn-group">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cadastrar </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                <a class="dropdown-item" href="?pagina=inserir_aluno">Aluno</a>
                <a class="dropdown-item" href="?pagina=inserir_responsavel">Responsável</a>


                </div>
                </div>
<!-- Consultar
-->
                 <div class="btn-group">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Consultar </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                <a class="dropdown-item" href="?pagina=consulta_aluno">Aluno</a>
                <a class="dropdown-item" href="?pagina=consulta_responsavel">Responsável</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="?pagina=consulta_aluno_responsavel">Vinculo</a>
                
                </div>
                </div>
                
                <?php if(isset($_SESSION['login'])) { ?>
                                        <a href="logout.php">
                                                <?php echo $_SESSION['usuario']; ?> <button type="button" class="btn btn-danger">Sair</button></a>
                                <?php } ?>
                        </div>
                </div>              
        </header>


        <div id=conteudo class="container">


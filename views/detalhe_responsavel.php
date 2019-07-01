 <?php
/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);

/* Habilita a exibição de erros */
ini_set("display_errors", 1);
?>


<?php
print_r($_GET);
if($_GET["5"] === "") echo "a is an empty string\n";
if($_GET["a"] === false) echo "a is false\n";
if($_GET["a"] === snull) echo "a is null\n";
if(isset($_GET["a"])) echo "a is set\n";
if(!empty($_GET["a"])) echo "a is not empty";
?>




<!-- 
<? 
$ver = if(isset($_GET['view'])){ };
?>

 <?php
/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);

/* Habilita a exibição de erros */
ini_set("display_errors", 1);
?>


<nav id="navbar-example2" class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Dados do Responsável</a>
  <ul class="nav nav-pills">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Filhos Vinculados</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="">Filho 1</a>
        <a class="dropdown-item" href="">Filho 2</a>
        <div role="separator" class="dropdown-divider"></div>
        <a class="dropdown-item">Qtd.: 02</a>
      </div>
    </li>
  </ul>
</nav>
<br><br>
<table class="table table-hover table-striped">
    <tbody>
        <tr>
          <th>Nome</th>
          <?php
	while ($linha = mysqli_fetch_array($consulta_responsavel_id)){
		echo '<td>'.$linha['nome_responsavel'].'</td>'; ?>
        </tr>
        <tr>
          <th>Matrícula</th>
          <?php 
            echo '<td>'.$linha['mat_responsavel'].'</td>';?>
        </tr>
        <tr>
          <th>CPF</th>
          <?php 
            echo '<td>'.$linha['cpf_responsavel'].'</td>';?>
        </tr>
        <tr>
          <th>Telefone</th>
          <?php 
            echo '<td>'.$linha['tel1_responsavel'].'</td>';?>
        </tr>
        <tr>
          <th>Telefone (Opcional)</th>
          <?php 
            echo '<td>'.$linha['tel2_responsavel'].'</td>';?>
        </tr>
        <tr>
          <th>Email</th>
            <?php 
            echo '<td>'.$linha['email_responsavel'].'</td>';?>
        </tr>       
        <tr>
          <th>Endereço</th>
          <?php 
            echo '<td>'.$linha['end_responsavel'].'</td>';?>
        </tr>
        <tr>
          <th>CEP</th>
          <?php 
            echo '<td>'.$linha['cep_responsavel'].'</td>';?>
        </tr>        
        <tr>
          <th>Cidade</th>
            <?php 
            echo '<td>'.$linha['cidade_responsavel'].'</td>';?>
        </tr>
        <tr>
          <th>UF</th>
            <?php 
            echo '<td>'.$linha['uf_responsavel'].'</td>';?>
        </tr>        
        <tr>
          <th>Descrição</th>
            <?php 
            echo '<td>'.$linha['desc_responsavel'].'</td>';?>
        </tr>        
    </tbody>
</table>
<?php
  }; 
?>
<p align="right"><a class="btn btn-primary" href="javascript:history.back()" role="button">Voltar</a></p>



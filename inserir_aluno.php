<?php if(!isset($_GET['editar'])){ 	?>

<h4> <i class="fas fa-user"></i> Cadastro de Alunos </b></h4><hr>

<form method="post" action="processa_aluno.php">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label>Nome do Aluno</label>
      <input type="text" class="form-control" name="nome_aluno" placeholder="Nome Completo" required>
    </div>
      <div class="col-md-3 mb-3">
      <label>Data de Nascimento</label>
      <input type="date" class="form-control" name="dn_aluno" placeholder="DD/MM/ANO" required>
      </div>
	<div class="col-md-3 mb-3">
	 <label>Sexo</label>
      <select class="custom-select" name="sexo_aluno" id="sexo_aluno">
        <option selected>Selecione...</option>
        <option value="1">Masculino</option>
        <option value="2">Feminino</option>
       </select>
	</div> 
</div>

  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label>Nome do Pai</label>
      <input type="text" class="form-control" name="pai_aluno" placeholder="Nome Completo" required>
    </div>
    <div class="col-md-6 mb-3">
      <label>Nome da Mãe</label>
      <input type="text" class="form-control" name="mae_aluno" placeholder="Nome Completo" required>
    </div>
</div>
<div class="form-row">
    <div class="col-md-6 mb-3">
      <label>Descrição</label>
      <textarea rows="4" type="text" class="form-control" name="descricao_aluno" placeholder="Registre aqui se a criança precisa de cuidados especiais por exemplo"></textarea>
    </div>
</div>
<button class="btn btn-primary" type="submit">Cadastrar Aluno</button>
</form>

<!--
Metodo para editar o formulario acima
-->

<?php } else { ?>
	<?php while ($linha = mysqli_fetch_array($consulta_aluno)){ ?>
		<?php if ($linha['id_aluno'] == $_GET['editar']){ ?>
	
			<h4> Editar Aluno </h4><hr>
		<form method="post" action="edita_aluno.php">
			<form>
				<input  type="hidden" name="id_aluno" value="<?php echo $linha['id_aluno']; ?> "><br>
				<div class="form-row">
    <div class="col-md-6 mb-3">
      <label>Nome do Aluno</label>
      <input type="text" class="form-control" name="nome_aluno" value="<?php echo $linha['nome_aluno']; ?> ">
      </div>
      <div class="col-md-3 mb-3">
	      <label>Data de Nascimento</label>
	      <input type="text" class="form-control" name="dn_aluno" value="<?php echo $linha['dn_aluno']; ?> ">
	      </div>
		<div class="col-md-3 mb-3">
		 <label>Sexo</label>
	      <input type="text" class="form-control" name="sexo_aluno" value="<?php echo $linha['sexo_aluno']; ?> ">
	       </select>
		</div> 
	</div>

	 <div class="form-row">
		    <div class="col-md-6 mb-3">
		      <label>Nome do Pai</label>
		      <input type="text" class="form-control" name="pai_aluno" value="<?php echo $linha['pai_aluno']; ?> ">
		    </div>
		    <div class="col-md-6 mb-3">
		      <label>Nome da Mãe</label>
		      <input type="text" class="form-control" name="mae_aluno" value="<?php echo $linha['mae_aluno']; ?> ">
		    </div>
		</div>
		<div class="form-row">
		    <div class="col-md-6 mb-3">
		      <label>Descrição</label>
		      <textarea rows="4" type="text" class="form-control" name="descricao_aluno" value="<?php echo $linha['descricao_aluno']; ?> "></textarea>
		    </div>
		</div>
				<button class="btn btn-primary" type="submit">Editar Aluno</button>
			</form>
		<?php } ?>
	<?php  } ?>
<?php } ?>
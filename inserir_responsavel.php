<?php if(!isset($_GET['editar'])){ 	?>

<h4> <i class="fas fa-user"></i> Cadastro de Pai e/ou Responsável </b></h4><hr>

<form method="post" action="processa_responsavel.php">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label>Nome do Responsável</label>
      <input type="text" class="form-control" name="nome_responsavel" placeholder="Nome Completo" required>
    </div>
      <div class="col-md-3 mb-3">
      <label>CPF</label>
      <input type="text" class="form-control" name="cpf_responsavel" placeholder="000.000.000-00" required>
      </div>
	<div class="col-md-3 mb-3">
	 <label>Matricula</label>
      <input type="text" class="form-control" name="mat_responsavel" placeholder="Matricula" required>
	</div> 
</div>

  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label>E-mail</label>
      <input type="text" class="form-control" name="email_responsavel" placeholder="E-mail" required>
    </div>
      <div class="col-md-4 mb-3">
      <label>Telefone/Celular 1</label>
      <input type="text" class="form-control" name="tel1_responsavel" placeholder="(00) 00000-0000" required>
      </div>
	<div class="col-md-4 mb-3">
	 <label>Telefone/Celular2</label>
      <input type="text" class="form-control" name="tel2_responsavel" placeholder="(00) 00000-0000">
	</div> 
</div>

  <div class="form-row">
    <div class="col-md-6 mb-2">
      <label>Endereço</label>
      <input type="text" class="form-control" name="end_responsavel" placeholder="Endereço" required>
    </div>
    <div class="col-md-2 mb-2">
      <label>CEP</label>
      <input type="text" class="form-control" name="cep_responsavel" placeholder="CEP" required>
    </div>
    <div class="col-md-2 mb-2">
      <label>Cidade</label>
      <input type="text" class="form-control" name="cidade_responsavel" placeholder="Cidade" required>
    </div>
    <div class="col-md-2 mb-2">
    	<label>Estado</label>
		<select name="uf_responsavel" class="custom-select">
			<option selected>-- Selecione --</option>
			<option value="AC">Acre</option>
			<option value="AL">Alagoas</option>
			<option value="AP">Amapá</option>
			<option value="AM">Amazonas</option>
			<option value="BA">Bahia</option>
			<option value="CE">Ceará</option>
			<option value="DF">Distrito Federal</option>
			<option value="ES">Espírito Santo</option>
			<option value="GO">Goiás</option>
			<option value="MA">Maranhão</option>
			<option value="MT">Mato Grosso</option>
			<option value="MS">Mato Grosso do Sul</option>
			<option value="MG">Minas Gerais</option>
			<option value="PA">Pará</option>
			<option value="PB">Paraíba</option>
			<option value="PR">Paraná</option>
			<option value="PE">Pernambuco</option>
			<option value="PI">Piauí</option>
			<option value="RJ">Rio de Janeiro</option>
			<option value="RN">Rio Grande do Norte</option>
			<option value="RS">Rio Grande do Sul</option>
			<option value="RO">Rondônia</option>
			<option value="RR">Roraima</option>
			<option value="SC">Santa Catarina</option>
			<option value="SP">São Paulo</option>
			<option value="SE">Sergipe</option>
			<option value="TO">Tocantins</option>
		</select>

</div></div>
<div class="form-row">
    <div class="col-md-6 mb-3">
      <label>Descrição</label>
      <textarea rows="4" type="text" class="form-control" name="desc_responsavel" placeholder="Observações"></textarea>
    </div>
</div>
<button class="btn btn-primary" type="submit">Cadastrar Responsável</button>
</form>


<!--
Metodo para editar o formulario acima
-->

<?php } else { ?>
	<?php while ($linha = mysqli_fetch_array($consulta_responsavel)){ ?>
		<?php if ($linha['id_responsavel'] == $_GET['editar']){ ?>
	
			<h4> Editar Responsavel </h4><hr>
		<form method="post" action="edita_responsavel.php">
			<form>
				<input type="hidden" name="id_responsavel" value="<?php echo $linha['id_responsavel']; ?> "><br>
				<div class="form-row">
  



		    <div class="col-md-3 mb-3">
		      <label>Nome do Responsável</label>
		      <input type="text" class="form-control" name="nome_responsavel" value="<?php echo $linha['nome_responsavel']; ?> ">
		  		</div>
		      <div class="col-md-3 mb-3">
		      <label>CPF</label>
		      <input type="text" class="form-control" name="cpf_responsavel" value="<?php echo $linha['cpf_responsavel']; ?> ">
		      </div>
			<div class="col-md-3 mb-3">
			 <label>Matricula</label>
		      <input type="text" class="form-control" name="mat_responsavel" value="<?php echo $linha['mat_responsavel']; ?> ">
			</div> 
		</div>

		  <div class="form-row">
		    <div class="col-md-4 mb-3">
		      <label>E-mail</label>
		      <input type="text" class="form-control" name="email_responsavel" value="<?php echo $linha['email_responsavel']; ?> ">
		    </div>
		      <div class="col-md-4 mb-3">
		      <label>Telefone/Celular 1</label>
		      <input type="text" class="form-control" name="tel1_responsavel" value="<?php echo $linha['tel1_responsavel']; ?> ">
		      </div>
			<div class="col-md-4 mb-3">
			 <label>Telefone/Celular2</label>
		      <input type="text" class="form-control" name="tel2_responsavel" value="<?php echo $linha['tel2_responsavel']; ?> ">
			</div> 
		</div>
		  <div class="form-row">
		    <div class="col-md-6 mb-2">
		      <label>Endereço</label>
		      <input type="text" class="form-control" name="end_responsavel" value="<?php echo $linha['end_responsavel']; ?> ">
		    </div>
		    <div class="col-md-2 mb-2">
		      <label>CEP</label>
		      <input type="text" class="form-control" name="cep_responsavel" value="<?php echo $linha['cep_responsavel']; ?> ">
		    </div>
		    <div class="col-md-2 mb-2">
		      <label>Cidade</label>
		      <input type="text" class="form-control" name="cidade_responsavel" value="<?php echo $linha['cidade_responsavel']; ?> ">
		    </div>
		    <div class="col-md-2 mb-2">
		    	<label>Estado</label>
				<input type="text" class="form-control" name="uf_responsavel" value="<?php echo $linha['uf_responsavel']; ?> ">

		</div></div>
		<div class="form-row">
		    <div class="col-md-6 mb-3">
		      <label>Descrição</label>
		      <textarea rows="4" type="text" class="form-control" name="desc_responsavel" placeholder="Observações"></textarea>
		    </div>
		</div>

				<button class="btn btn-primary" type="submit">Editar Responsável</button></div>
			</form>
		<?php } ?>
	<?php  } ?>
<?php } ?>
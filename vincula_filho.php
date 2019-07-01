<h1> Vincular Filho</h1>
<form method="post" action="processa_vinculo.php">
	<select class="form-control" name="escolha_aluno">
		<option>Selecionar Aluno</option>
		<?php 
			while ($linha = mysqli_fetch_array($consulta_aluno)){
		echo '<option value="'.$linha['id_aluno'].'">'.$linha['nome_aluno'].'</option>';
	}
	?>
	</select>

<br><br>
<select class="form-control" name="escolha_responsavel">
	<option>Selecionar Responsavel</option>
		<?php 
			while ($linha = mysqli_fetch_array($consulta_responsavel)){
		echo '<option value="'.$linha['id_responsavel'].'">'.$linha['id_responsavel'].'</option>';
	}
	?>
	</select><br><br>
	<input class="form-control" type="submit" value="Vincular Responsavel/Aluno">
</form>
<a class="btn btn-success" href="?pagina=inserir_aluno">Novo Aluno</a>
<br><br>

<table class="table table-hover table-striped" id="alunos">
	<thead>
	<tr>
		<th>Nome do Aluno</th>
		<th>Data de Nascimento </th>
		<th>Sexo </th>
		<th>Nome do Pai </th>
		<th>Nome da Mãe</th>
		<th>Descrição </th>
		<th>Editar </th>
		<th>Deletar </th>
		
	</tr>
</thead>


<tbody>
<?php
	while ($linha = mysqli_fetch_array($consulta_aluno)){
		echo '<tr><td>'.$linha['nome_aluno'].'</td>';
		echo '<td>'.$linha['dn_aluno'].'</td>';
		echo '<td>'.$linha['sexo_aluno'].'</td>';
		echo '<td>'.$linha['pai_aluno'].'</td>';
		echo '<td>'.$linha['mae_aluno'].'</td>';
		echo '<td>'.$linha['descricao_aluno'].'</td>';
	?>

	<td><a href="?pagina=inserir_aluno&editar=<?php echo $linha['id_aluno'];?>">
		<i class="fas fa-user-edit"></a></td>
	<td><a href="deleta_aluno.php?id_aluno=<?php echo $linha['id_aluno']; ?>" onclick="return confirm('Deseja Excluir Aluno?');">
		<span style="color: #f00000;"><i class="fas fa-user-times"></a></td></tr></i></span>
<?php
	} 
	?> 
	</tbody>
</table>


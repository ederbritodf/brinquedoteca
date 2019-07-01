<a class="btn btn-success" href="?pagina=inserir_responsavel">Cadastrar Responsável</a>
<br><br>
<table class="table table-hover table-striped" id="alunos">
	<thead>
	<tr>
		<th>Responsavel</th>
		<th>CPF</th>
		<th>Matricula</th>
		<th>Telefone</th>
		<th>Detalhes </th>
		<th>Editar </th>
		<th>Deletar </th>
		
	</tr>
</thead>
<tbody>
<?php
	while ($linha = mysqli_fetch_array($consulta_responsavel)){
		echo '<tr><td>'.$linha['nome_responsavel'].'</td>';
		echo '<td>'.$linha['cpf_responsavel'].'</td>';
		echo '<td>'.$linha['mat_responsavel'].'</td>';
		echo '<td>'.$linha['tel1_responsavel'].'</td>';
	?>

	<td><a href="?pagina=detalhe_responsavel&view=<?php echo $linha['id_responsavel']; ?>">
	<!-- Botao ver --><i class="fas fa-search-plus btn btn-primary"></a></td>
	<td><a href="" i class="fas fa-user-edit btn btn-secondary" data-target="#modalEditar" data-toggle="modal"></td>
			<!-- Modal -->
			<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="modalEditar" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="modalEditar">ATENÇÃO!</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
					<?php
						echo 'Editar o Responsável: '.$linha['nome_responsavel'].'?';	?>
					</div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					<a href="?pagina=inserir_responsavel&editar=<?php echo $linha['id_responsavel']; ?>" button type="button" class="btn btn-primary">Sim, Quero Editar</a>
			      </div>
			    </div>
			  </div>
			</div>

	
	<td>
		<!-- Botao Delete --><a href="#" i class="fas fa-user-times btn btn-danger" data-target="#modalDeletar" data-toggle="modal"></td>
			<!-- Modal -->
			<div class="modal fade" id="modalDeletar" tabindex="-1" role="dialog" aria-labelledby="modalDeletar" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="modalDeletar">ATENÇÃO!</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
					<?php
						echo 'Está ação irá excluir o Responsável: '.$linha['nome_responsavel'].'.<br> Tem certeza que deseja excluir?';	?>			    
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					<a href="deleta_responsavel.php?id_responsavel=<?php echo $linha['id_responsavel']; ?>" button type="button" class="btn btn-danger">Sim, Quero Exluir!</a>
					</div>
				 </div>
		 		</div>
		 	</div>
		</a></td></a></td></i></a></td>
<?php
	} 
	?> 
</tbody>
</table>
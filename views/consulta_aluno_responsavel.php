<?php 
/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);

/* Habilita a exibição de erros */
ini_set("display_errors", 1);
?>
<a class="btn btn-success" href="?pagina=inserir_aluno_responsavel">Vincular Aluno/Responsável</a>
<br><br>
<table class="table table-hover table-striped" id="consulta_aluno_responsavel">
	<thead>
	<tr>
		<th>Nome do Aluno</th>
		<th>Nome do Responsavel</th>
		<th>Deletar</th>
	</tr>
</thead>

<tbody>

<?php
	while($linha = mysqli_fetch_array($consulta_aluno_responsavel)){
		echo '<tr><td>'.$linha['nome_aluno'].'</td>';
		echo '<td>'.$linha['nome_responsavel'].'</td>';
?>
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
						echo ''.$linha['nome_responsavel'].' é responsável pelo aluno: '.$linha['nome_aluno'].'.<br>Tem certeza que deseja excluir?';	?>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					<a href="deleta_vinculo.php?id_aluno_responsavel=<?php echo $linha['id_aluno_responsavel']; ?>" button type="button" class="btn btn-danger">Sim, Quero Exluir!</a>
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

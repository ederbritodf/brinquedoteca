<?php if(isset($_GET['erro'])){ ?>
		<div class="alert alert-danger" role="alert">
		  Usuário ou senha inválidos.
		</div>
	<?php } ?>

<h2 style="text-align: center"> Bem vindo </h2>

<form method="POST" action="login.php">
	<label class="badge badge-secondary">Usuário</label>
	<input type="text" name="usuario" placeholder="Nome do Usuario" class="form-control">
<br>
	<label class="badge badge-secondary">Senha</label>
	<input type="password" name="senha" placeholder="Digite a Senha" class="form-control">
<br>

	<input type="submit" value="Login" class="btn btn-success">
</form>


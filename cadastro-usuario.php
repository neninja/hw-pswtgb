<?php include("cabecalho.php"); ?>

<form action="persistir.php" method="post">
	<div class="form-group">
		<label for="nome">Nome</label>
		<input type="text" class="form-control" id="nome" placeholder="Qual o nome do usuário?" />
	</div>
	
	<div class="form-group">
		<label for="senha">Senha</label>
		<input type="password" class="form-control" id="senha" placeholder="Qual será a senha?" />
	</div>

	<div class="form-group">
		<label>Restrição do usuário</label>
		<br>
		<label class="radio-inline" for="admin">
			<input type="radio" name="tipo-user" id="admin" value="admin" />Administrador
		</label>
		<label class="radio-inline" for="professor">
			<input type="radio" name="tipo-user" id="professor" value="professor">Professor
		</label>
		<label class="radio-inline" for="aluno">
			<input type="radio" name="tipo-user" id="aluno" value="aluno">Aluno
		</label>
	</div>

	<button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php include("rodape.php"); ?>

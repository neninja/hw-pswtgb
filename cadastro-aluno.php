<?php include("cabecalho.php"); ?>

<form action="persistir.php" method="post">
	<div class="form-group">
		<label for="nome">Nome</label>
		<input type="text" class="form-control" name="nome" id="nome" placeholder="Qual seu nome?" required>
	</div>
	
	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" class="form-control" name="email" id="email" placeholder="Qual seu email?" required>
	</div>

	<!-- Aqui deve se usar o php para procurar a lista de cursos! O algoritmo se encontrará em: pesquisa-curso -->

	<div class="form-group">
		<label for="curso">Curso</label>
		<select name="curso" id="curso" class="form-control" data-live-search="true" data-show-subtext="true" data-live-search="true" required>
			<option disabled selected>Selecione o curso!</option>
			<option value="ads">ADS</option>
			<option value="gti">GTI</option>
			<option value="redes">Redes</option>
		</select>
	</div>

	<div class="form-group">
		<label for="cidade">Cidade</label>
		<select name="cidade" id="cidade" class="form-control" data-live-search="true" required>
			<option disabled selected>Selecione a cidade!</option>
			<option value="porto-alegre">Porto Alegre</option>
			<option value="canoas">Canoas</option>
			<option value="sapucaia">Sapucaia</option>
		</select>
	</div>

	<input name="cargo" value="aluno" type='hidden'>
	
	<button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php include("rodape.php"); ?>



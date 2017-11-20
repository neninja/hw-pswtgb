<?php include("cabecalho.php"); ?>

<form action="persistir.php" method="post">
	<div class="form-group">
		<label for="nome">Nome</label>
		<input type="text" class="form-control" name="nome" id="nome" placeholder="Qual seu nome?" required>
	</div>
	
	<div class="form-group">
		<label for="horas">Horas</label>
		<input class="form-control" type="number" id="horas" placeholder="Quantas horas de curso?" required>
	</div>
	
	<button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php include("rodape.php"); ?>

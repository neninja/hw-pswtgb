<?php
include("cabecalho.php");
include("classes/Aluno.php");
include("classes/Professor.php");

if($_POST["cargo"] == "aluno"){
	$aluno = new Aluno();

	$aluno->setNome($_POST["nome"]);
	$aluno->setEmail($_POST["email"]);
	$aluno->setCurso($_POST["curso"]);
	$aluno->setCidade($_POST["cidade"]);

	echo "olá <strong>Aluno</strong> " . $aluno->getNome() . "<br>do email: " . $aluno->getEmail() . "<br>do curso: " . $aluno->getCurso() . "<br>da cidade: " . $aluno->getCidade();


} else {
	$professor = new Professor();

	$professor->setNome($_POST["nome"]);
	$professor->setEmail($_POST["email"]);
	$professor->setCurso($_POST["curso"]);
	$professor->setCidade($_POST["cidade"]);

	echo "olá <strong>Professor</strong> " . $professor->getNome() . "<br>do email: " . $professor->getEmail() . "<br>do curso: " . $professor->getCurso() . "<br>da cidade: " . $professor->getCidade();
}
?>

<div class="alert alert-success">
	<strong><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Cadastrado com successo!</strong>
</div>

<?php include("rodape.php"); ?>
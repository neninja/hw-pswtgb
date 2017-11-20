<?php
class Curso {
	private var $nome;
	private var $cargaHoraria;

	public function getNome(){
		return $this->nome;
	}

	public function setNome($tmp){
		$this->nome = $tmp;
	}

	public function getCargaHoraria(){
		return $this->cargaHoraria;
	}

	public function setCargaHoraria($tmp){
		$this->cargaHoraria = $tmp;
	}
}

?>


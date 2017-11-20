<?php
class Professor {
	private $nome;
	private $email;
	private $curso;
	private $cidade;

	public function getNome(){
		return $this->nome;
	}

	public function setNome($tmp){
		$this->nome = $tmp;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($tmp){
		$this->email = $tmp;
	}

	public function getCurso(){
		return $this->curso;
	}

	public function setCurso($tmp){
		$this->curso = $tmp;
	}

	public function getCidade(){
		return $this->cidade;
	}

	public function setCidade($tmp){
		$this->cidade = $tmp;
	}
}

?>
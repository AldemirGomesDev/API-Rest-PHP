<?php
include_once '../../model/Conteudo.php';

class ConteudoControl{
	private $conteudo;

	public function __construct()
    {
		$this->conteudo = new Conteudo();
	}
	function insert($obj){
		$conteudo = new Conteudo();
		//echo $obj->titulo;
		return $conteudo->insert($obj);
		header('Location:listar.php');
	}
	function update($obj,$id){
		$conteudo = new Conteudo();
		return $conteudo->update($obj,$id);
	}
	function delete($obj,$id){
		$conteudo = new Conteudo();
		return $conteudo->delete($obj,$id);
	}
	function find($id = null){
	}
	function findAll(){
		$conteudo = new Conteudo();
		return $this->conteudo->findAll();
	}
}
new ConteudoControl();
?>
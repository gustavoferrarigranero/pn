<?php
class OlheiroController{

	private $olheiroModel;

	public function __construct(){
		require_once("model/OlheiroModel.php");
		$this->olheiroModel = new OlheiroModel();
	}

	public function inserir($dados = array()){

		$this->olheiroModel->inserir($dados);
		
	}
	
	public function alterar($dados = array()){
		
		$this->olheiroModel->alterar($dados);
		
	}
	
	public function excluir($dados = array()){
		
		$id = $dados['id_olheiro'];
		$this->olheiroModel->excluir($id);
		
	}
	
	public function listar($dados = array()){
		
		return $this->olheiroModel->listar($dados);
		
	}

}

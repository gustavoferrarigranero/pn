<?php
class PeneiraController{

	private $peneiraModel;

	public function __construct(){
		require_once("model/PeneiraModel.php");
		$this->peneiraModel = new PeneiraModel();
	}

	public function inserir($dados = array()){

		$this->peneiraModel->inserir($dados);
		
	}
	
	public function alterar($dados = array()){
		
		$this->peneiraModel->alterar($dados);
		
	}
	
	public function excluir($dados = array()){
		
		$id = $dados['id_peneira'];
		$this->peneiraModel->excluir($id);
		
	}
	
	public function listar($dados = array()){
		
		return $this->peneiraModel->listar($dados);
		
	}

}

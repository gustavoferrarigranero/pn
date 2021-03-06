<?php
class PeneiraController{

	private $peneiraModel;

	public function __construct(){
		require_once("model/PeneiraModel.php");
		$this->peneiraModel = new PeneiraModel();
	}

	public function inserir($dados = array()){

		$this->peneiraModel->inserir($dados);
		$_SESSION['sucesso'] = $this->lastId();
		
	}
	
	public function alterar($dados = array()){
		
		if($this->peneiraModel->alterar($dados)){
			$_SESSION['sucesso'] = "Peneira alterada com sucesso!";	
		}
		
	}
	
	public function excluir($dados = array()){
		
		$id = $dados['id_peneira'];
		$this->peneiraModel->excluir($id);
		
	}
	
	public function listar($dados = array()){
		
		return $this->peneiraModel->listar($dados);
		
	}
	
	public function get($id){
		
		return $this->peneiraModel->get($id);
		
	}
	
	public function lastId(){
		
		return $this->peneiraModel->lastId();
		
	}

}

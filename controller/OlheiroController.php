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
		
		if($this->usuarioModel->alterar($dados)){
			$_SESSION['sucesso'] = "Dados alterados com sucesso!";
			$_SESSION['usuario'] = $this->get($_SESSION['usuario']['id_usuario'])->row;
		}
		
	}
	
	public function excluir($dados = array()){
		
		$id = $dados['id_olheiro'];
		$this->olheiroModel->excluir($id);
		
	}
	
	public function listar($dados = array()){
		
		return $this->olheiroModel->listar($dados);
		
	}
	
	public function get($id){
		
		return $this->usuarioModel->get($id);
		
	}
	
	public function verificaLogin($dados = array()){
		$login = $this->olheiroModel->verificaLogin($dados);
		if($login){
			$_SESSION['sucesso'] = $login;
		}else{
			$_SESSION['erro'] = "Dados inválidos!";
		}
		
	}
	
	public function lastId(){
		
		return $this->olheiroModel->lastId();
		
	}

}

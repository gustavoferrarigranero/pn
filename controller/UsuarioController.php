<?php
class UsuarioController{

	private $usuarioModel;

	public function __construct(){
		require_once("model/UsuarioModel.php");
		$this->usuarioModel = new UsuarioModel();
	}

	public function inserir($dados = array()){

		$this->usuarioModel->inserir($dados);
		
	}
	
	public function alterar($dados = array()){
		
		$this->usuarioModel->alterar($dados);
		
	}
	
	public function excluir($dados = array()){
		
		$id = $dados['id_usuario'];
		$this->usuarioModel->excluir($id);
		
	}
	
	public function listar($dados = array()){
		
		return $this->usuarioModel->listar($dados);
		
	}

}

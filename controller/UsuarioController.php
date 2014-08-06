<?php
class UsuarioController{

	private $usuarioModel;

	public function __construct(){
		require_once("model/UsuarioModel.php");
		$this->usuarioModel = new UsuarioModel();
	}

	public function inserir($dados = array()){
		
		if(!$this->usuarioModel->verificaEmail($dados['email'])){
			$this->usuarioModel->inserir($dados);
			$_SESSION['sucesso'] = "Usuário cadastrado com sucesso, faça seu login!";
			$_SESSION['usuario'] = $this->get($this->lastId())->row;
		}else{
			$_SESSION['erro'] = "Email ja cadastrado!";
		}
		
	}
	
	public function alterar($dados = array()){
		
		if($this->usuarioModel->alterar($dados)){
			$_SESSION['sucesso'] = "Dados alterados com sucesso!";
			$_SESSION['usuario'] = $this->get($_SESSION['usuario']['id_usuario'])->row;
		}
	}
	
	public function excluir($dados = array()){
		
		$id = $dados['id_usuario'];
		$this->usuarioModel->excluir($id);
		
	}
	
	public function listar($dados = array()){
		
		return $this->usuarioModel->listar($dados);
		
	}
	
	public function get($id){
		
		return $this->usuarioModel->get($id);
		
	}
	
	public function verificaLogin($dados = array()){
		$login = $this->usuarioModel->verificaLogin($dados);
		if($login){
			$_SESSION['sucesso'] = $login;
		}else{
			$_SESSION['erro'] = "Dados inválidos!";
		}
		
	}
	
	public function lastId(){
		
		return $this->usuarioModel->lastId();
		
	}

}

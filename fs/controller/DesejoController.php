<?php
class DesejoController{

	private $desejoModel;

	public function __construct(){
		require_once("model/DesejoModel.php");
		$this->desejoModel = new DesejoModel();
	}

	public function inserir($dados = array()){

		if($this->desejoModel->inserir($dados)){
			$_SESSION['sucesso'] = "Desejo cadastrado com sucesso! Ao ser atendido você receberá um e-mail com todas as informações!";
		}
		
	}
	
	public function alterar($dados = array()){
		
		$this->desejoModel->alterar($dados);
		
	}
	
	public function excluir($dados = array()){
		
		$id = $dados['id'];
		$this->desejoModel->excluir($id);
		
	}
	
	public function listar($dados = array()){
		
		return $this->desejoModel->listar($dados);
		
	}
	
	public function atende($id){
		
		require_once("model/UsuarioModel.php");
		$usuarioModel = new UsuarioModel();
		
		$desejo = $this->desejoModel->retornaDesejo($id)->row;
		$usuario_desejo = $usuarioModel->retornaUsuario($desejo['usuario_id'])->row;

		$html = 'Seu desejo será atendido pelo usuario: '.$_SESSION['usuario']['nome'].', entre em contato com ele(a) através do email: '.$_SESSION['usuario']['email'];		
		
			

		if($this->desejoModel->atende($id)){
			$_SESSION['sucesso'] = "Desejo atendido com sucesso! Aguarde o usuario entrar em contato pelo seu e-mail!";
			
			// Email de confirmação
			mail($usuario_desejo['email'],"Desejo Atendido - Fabrica de Sonhos",$html);	
		}
		
	}
}

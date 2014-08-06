<?php
class DoacaoController{

	private $doacaoModel;

	public function __construct(){
		require_once("model/DoacaoModel.php");
		$this->doacaoModel = new DoacaoModel();
	}

	public function inserir($dados = array()){

		

			
		if($this->doacaoModel->inserir($dados)){
			if($dados['metodo'] == '1'){
				$html = 'Olá, você escolheu doar para o nosso site para ajudarmos algum com sua doação, por favor entre em contato no email: : '.EMAIL.' para concluirmos a doação.Muito Obrigado! ';	
				$_SESSION['sucesso'] = "Doação Efetuada com sucesso! Você recebera informações no seu email!";
			}else{
				$html = 'Olá, você escolheu doar para o nosso site para ajudarmos algum com sua doação, assim que seu pagamento for confirmado pelo pagseguro iremos ajudar uma família ou criança com a sua doação.Muito Obrigado! ';	
				$_SESSION['sucesso'] = "Doação Efetuada com sucesso! Abaixo você pode clicar em Doar com Pagseguro para efetuar o pagamento da sua doação!";
			}
			// Email de confirmação
			mail($_SESSION['usuario']['email'],"Doação Efetuada - Fabrica de Sonhos",$html);	
		}

	}
	
	public function alterar($dados = array()){
		
		$this->doacaoModel->alterar($dados);
		
	}
	
	public function excluir($dados = array()){
		
		$id = $dados['id'];
		$this->doacaoModel->excluir($id);
		
	}
	
	public function listar($dados = array()){
		
		return $this->doacaoModel->listar($dados);
		
	}
}

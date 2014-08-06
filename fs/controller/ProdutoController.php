<?php
class ProdutoController{

	private $produtoModel;

	public function __construct(){
		require_once("model/ProdutoModel.php");
		$this->produtoModel = new ProdutoModel();
	}

	public function inserir($dados = array()){

		$this->produtoModel->inserir($dados);
		
	}
	
	public function alterar($dados = array()){
		
		$this->produtoModel->alterar($dados);
		
	}
	
	public function excluir($dados = array()){
		
		$id = $dados['id'];
		$this->produtoModel->excluir($id);
		
	}
	
	public function listar($dados = array()){
		
		return $this->produtoModel->listar($dados);
		
	}
	
	public function get($id){
		
		return $this->produtoModel->get($id);
		
	}
}

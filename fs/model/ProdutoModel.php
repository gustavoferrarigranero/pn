<?php
class ProdutoModel{

	private $connection;

	public function __construct(){
		require_once("Connection.php");
		$this->connection = new Connection();
	}

	public function listar($dados = array()){
		
		return $this->connection->query("SELECT * FROM `produtos`");
		
	}
	
	public function get($id){
		
		return $this->connection->query("SELECT * FROM `produtos` WHERE `id` = ". (int)$id);
		
	}
}

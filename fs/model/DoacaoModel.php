<?php
class DoacaoModel{

	private $connection;

	public function __construct(){
		require_once("Connection.php");
		$this->connection = new Connection();
	}

	public function inserir($dados = array()){
		
		return $this->connection->query("INSERT INTO `doacoes` (`produto_id`, `usuario_id`,`valor`,`status`,`pagseguro`,`data`) VALUES ('".(int)$dados['produto_id']."', '".(int)$dados['usuario_id']."', '".(float)$dados['valor']."', '".(int)$dados['status']."', '".$this->connection->escape($dados['pagseguro'])."', '".$this->connection->escape($dados['data'])."');");
		
	}
	
	public function alterar($dados = array()){
		
		return $this->connection->query("UPDATE `doacoes` SET `produto_id` = '".(int)$dados['produto_id']."', `usuario_id` = '".(int)$dados['usuario_id']."',`valor` = '".(float)$dados['valor']."', `status` = '".(int)$dados['status']."',`pagseguro` = '".$this->connection->escape($dados['pagseguro'])."',`data` = '".$this->connection->escape($dados['data'])."' WHERE id = ".(int)$dados['id'].";");
		
	}
	
	public function excluir($dados = array()){
		
		return $this->connection->query("DELETE FROM `doacoes` WHERE id = ".(int)$dados['id'].";");
		
	}
	
	public function listar($dados = array()){
		
		$sql = "SELECT * FROM `doacoes` d INNER JOIN usuarios u on u.`id` = d.usuario_id WHERE d.`id` is not null " ;
		
		if(isset($dados['order'])){
			$sql .= " ORDER BY d.`id` " . $dados['order']  ;	
		}
		
		if(isset($dados['limit'])){
			$sql .= " LIMIT " . $dados['limit']  ;	
		}
		
		//exit($sql);
		
		return $this->connection->query($sql);
		
	}
	
	public function alteraPagseguro($dados = array()){
		
		return $this->connection->query("UPDATE `doacoes` SET `pagseguro` = '".$this->connection->escape($dados['pagseguro'])."'  WHERE id = ".(int)$dados['id'].";");
		
	}
}

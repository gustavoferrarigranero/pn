<?php
class DesejoModel{

	private $connection;

	public function __construct(){
		require_once("Connection.php");
		$this->connection = new Connection();
	}

	public function inserir($dados = array()){
		
		return $this->connection->query("INSERT INTO `desejos` (`produto_id`, `descricao`, `usuario_id`,`status`) VALUES ('".(int)$dados['produto_id']."', '".$this->connection->escape($dados['descricao'])."', '".(int)$dados['usuario_id']."', '".(int)$dados['status']."');");
		
	}
	
	public function alterar($dados = array()){
		
		return $this->connection->query("UPDATE `desejos` SET `produto_id` = '".(int)$dados['produto_id']."', `descricao` = '".$this->connection->escape($dados['descricao'])."', `usuario_id` = '".(int)$dados['usuario_id']."', `status` = '".(int)$dados['status']."' WHERE id = ".(int)$dados['id'].";");
		
	}
	
	public function excluir($dados = array()){
		
		return $this->connection->query("DELETE FROM `desejos` WHERE id = ".(int)$dados['id'].";");
		
	}
	
	public function listar($dados = array()){
		
		$sql = "SELECT d.*, u.nome FROM `desejos` d INNER JOIN usuarios u ON u.id = d.usuario_id WHERE d.id is not null " ;
		
		if(isset($dados['filter_status'])){
			$sql .= " AND d.status = " . (int)$dados['filter_status']  ;	
		}
		
		if(isset($dados['order'])){
			$sql .= " ORDER BY d.id " . $dados['order']  ;	
		}
		
		if(isset($dados['limit'])){
			$sql .= " LIMIT " . $dados['limit']  ;	
		}
		
		
		
		return $this->connection->query($sql);
		
	}
	
	public function retornaDesejo($id){
		
		return $dados = $this->connection->query("SELECT * FROM `desejos` WHERE id = '".(int)$id."' LIMIT 1") ;
		
	}
	
	public function atende($id){
		
		return $this->connection->query("UPDATE `desejos` SET  `status` = 0 WHERE id = ".(int)$id.";");
		
	}
}

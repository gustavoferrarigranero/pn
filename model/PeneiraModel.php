<?php

class PeneiraModel {
	
	private $connection;

    public function __construct() {
		require_once('model/Connection.php');
		$this->connection = new	Connection();
	}

    public function listar($dados = array()) {
		
		$sql = "SELECT id_peneira, identificacao, endereco ,bairro , cep, cidade, estado, data, hora_inicial, n_jogadores, duracao FROM tb_peneiras WHERE id_peneira IS NOT NULL";
		
		if(isset($dados['filter_id_olheiro']) && $dados['filter_id_olheiro']){
			$sql .= " AND id_olheiro = " . (int)$dados['filter_id_olheiro'] ;
		}
		
		
		$sql .= " ORDER BY identificacao " ;

       return $this->connection->query($sql);
    }


    public function get($id) {

        return $this->connection->query("SELECT * FROM tb_peneiras WHERE id_peneira = '".(int)$id."'");
    }


    public function inserir($dados) {

        return $this->connection->query("INSERT INTO tb_peneiras (identificacao, endereco,bairro , cep, cidade, estado, data, hora_inicial, n_jogadores, duracao)  VALUES ('".$dados['identificacao']."','".$dados['endereco']."','".$dados['bairro']."','".$dados['cep']."','".$dados['cidade']."','".$dados['estado']."','".$dados['data']."', '".$dados['hora_inicial']."', '".$dados['n_jogadores']."','".$dados['duracao']."')");
		
    }


    public function alterar($dados) {
		
		return $this->connection->query("UPDATE tb_peneiras SET identificacao = '".$dados['identificacao']."',endereco = '".$dados['endereco']."',bairro = '".$dados['bairro']."', cep = '".$dados['cep']."', cidade = '".$dados['cidade']."', estado = '".$dados['estado']."', data = '".$dados['data']."', hora_inicial = '".$dados['hora_inicial']."', n_jogadores = '".$dados['n_jogadores']."', duracao = '".$dados['duracao']."' WHERE id_peneira = '".$dados['id_peneira']."'");
			 
    }


    public function excluir($id) {

        $this->connection->query("DELETE FROM tb_peneiras where id_peneira = ". (int)$id);
		
    }
	
	public function lastId(){
		
		return $this->connection->getLastId();
		
	}

}
?>
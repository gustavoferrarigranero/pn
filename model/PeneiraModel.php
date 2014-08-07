<?php

class PeneiraModel {
	
	private $connection;

    public function __construct() {
		require_once('model/Connection.php');
		$this->connection = new	Connection();
	}

    public function listar() {

       return $this->connection->query("SELECT id_peneira, identificacao, local, cep, cidade, estado, data, hora_inicial, n_jogadores, duracao FROM tb_peneiras ORDER BY local");
    }


    public function get($id) {

        return $this->connection->query("SELECT * FROM tb_peneiras WHERE id_peneira = '".(int)$id."'");
    }


    public function inserir($dados) {

        $this->connection->query("INSERT INTO tb_peneiras (identificacao, local, cep, cidade, estado, data, hora_inicial, n_jogadores, duracao)  VALUES ('".$dados['identificacao']."','".$dados['local']."','".$dados['cep']."','".$dados['cidade']."','".$dados['estado']."','".$dados['data']."', '".$dados['hora_inicial']."', '".$dados['n_jogadores']."','".$dados['duracao']."')");
		
    }


    public function alterar($dados) {
		
		$this->connection->query("UPDATE tb_peneiras SET identificacao = '".$dados['identificacao']."',local = '".$dados['local']."', cep = '".$dados['cep']."', cidade = '".$dados['cidade']."', estado = '".$dados['estado']."', data = '".$dados['data']."', hora_inicial = '".$dados['hora_inicial']."', n_jogadores = '".$dados['n_jogadores']."', duracao = '".$dados['duracao']."'");
			 
    }


    public function excluir($id) {

        $this->connection->query("DELETE FROM tb_peneiras where id_peneira = ". (int)$id);
		
    }
	
	public function lastId(){
		
		return $this->connection->getLastId();
		
	}

}
?>
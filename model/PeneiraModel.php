<?php

class PeneiraModel {
	
	private $connection;

    public function __construct() {
		require_once('model/Connection.php');
		$this->connection = new	Connection();
	}

    public function listar() {

       return $this->connection->query("SELECT id_peneira, identificacao, local, cep, cidade, estado, data, hora_inicial, n_jogadores, duracao, n_atacante, n_meio, n_lateral_e, n_lateral_d, n_zagueiro, n_goleiro FROM tb_peneiras ORDER BY local");
    }


    public function get($id) {

        return $this->connection->query("SELECT * FROM tb_peneiras WHERE id_peneira = '".(int)$id."'");
    }


    public function inserir($dados) {

        $this->connection->query("INSERT INTO tb_peneiras (identificacao, local, cep, cidade, estado, data, hora_inicial, n_jogadores, duracao, n_atacante, n_meio, n_lateral_e, n_lateral_d, n_zagueiro, n_goleiro)  VALUES ('".$dados['identificacao']."','".$dados['local']."','".$dados['cep']."','".$dados['cidade']."','".$dados['estado']."','".$dados['data']."', '".$dados['hora_inicial']."', '".$dados['n_jogadores']."','".$dados['duracao']."', '".$dados['n_atacante']."', '".$dados['n_meio']."', '".$dados['n_lateral_e']."', '".$dados['n_lateral_d']."', '".$dados['n_zagueiro']."', '".$dados['n_goleiro']."')");
		
    }


    public function alterar($dados) {
		
		$this->connection->query("UPDATE tb_peneiras SET identificacao = '".$dados['identificacao']."',local = '".$dados['local']."', cep = '".$dados['cep']."', cidade = '".$dados['cidade']."', estado = '".$dados['estado']."', data = '".$dados['data']."', hora_inicial = '".$dados['hora_inicial']."', n_jogadores = '".$dados['n_jogadores']."', duracao = '".$dados['duracao']."', 	n_atacante = '".$dados['n_atacante']."', n_meio = '".$dados['n_meio']."',n_lateral_e = '".$dados['n_lateral_e']."', n_lateral_d = '".$dados['n_lateral_d']."', n_zagueiro = '".$dados['n_zagueiro']."',	n_goleiro = '".$dados['n_goleiro']."'");
			 
    }


    public function excluir($id) {

        $this->connection->query("DELETE FROM tb_peneiras where id_peneira = ". (int)$id);
		
    }

}
?>
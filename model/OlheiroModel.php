<?php

class OlheiroModel {
	
	private $connection;

    public function __construct() {
		require_once('model/Connection.php');
		$this->connection = new	Connection();
	}

  
  
    public function listar() {

        return $this->connection->query("SELECT id_olheiro, nome, cpf, telefone, celular, endereco, cidade, estado, numero, entidade, email, senha FROM tb_olheiros ORDER BY nome");
		
    }


    public function get($id) {

        return $this->connection->query("SELECT *,0 as tipo FROM tb_olheiros WHERE id_olheiro = '".(int)$id."'");
		
    }


    public function inserir($dados) {

       $this->connection->query("INSERT INTO tb_olheiros (nome, cpf, telefone, celular, endereco, cidade, estado, numero, entidade, email, senha)
        VALUES ('".$dados['nome']."', '".$dados['cpf']."', '".$dados['telefone']."', '".$dados['celular']."', 					'".$dados['endereco']."', '".$dados['cidade']."', '".$dados['estado']."', '".$dados['numero']."', '".$dados['entidade']."', '".$dados['email']."', '".$dados['senha']."')");
		
    }


    public function alterar($dados) {
		
		$this->connection->query("UPDATE tb_olheiros SET nome = '".$dados['nome']."', cpf = '".$dados['cpf']."', telefone = '".$dados['telefone']."', celular = '".$dados['celular']."', endereco = '".$dados['endereco']."',cidade = '".$dados['cidade']."', estado = '".$dados['estado']."', numero = '".$dados['numero']."',entidade = '".$dados['entidade']."',email = '".$dados['email']."', senha = '".$dados['senha']."' WHERE id_olheiro = '".$dados['id_olheiro']."'");
			
    }


    public function excluir() {

        $this->connection->query("DELETE FROM tb_olheiros where id_olheiro = ".(int)$id);
    }
	
	public function verificaLogin($dados){

		$dados = $this->connection->query("SELECT * FROM `tb_olheiros` WHERE email = '".$this->connection->escape($dados['email'])."' AND senha = '".$this->connection->escape($dados['senha'])."' LIMIT 1") ;
		if(isset($dados->num_rows)&&$dados->num_rows){
			return $dados->row;
		}else{
			return false;
		}
		
	}
	
	public function lastId(){
		
		return $this->connection->getLastId();
		
	}

}
?>
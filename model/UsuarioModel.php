<?php

class UsuarioModel {
	
	private $connection;

    public function __construct() {
		require_once('model/Connection.php');
		$this->connection = new	Connection();	
	}


    public function listar($dados = array()) {

		$sql = "SELECT id_usuario, nome, cpf, rg, escolaridade, telefone, celular, email, senha, endereco,bairro, numero, cidade,cep, estado, nome_pai, nome_mae, naturalidade, altura, peso, posicao, pe_preferido, caracteristicas, historico, tipo FROM tb_usuarios  WHERE id_usuario IS NOT NULL ";
		
		if((isset($dados['campo']) && $dados['campo']) && (isset($dados['valor']) && $dados['valor'])){
			$sql .= " AND ".$dados['campo']." = '" . $dados['valor'] . "' " ;
		}
		
		$sql .= " ORDER BY nome ";

        return $this->connection->query($sql);
		
    }



    public function get($id) {
        return $this->connection->query("SELECT *,1 as tipo FROM tb_usuarios WHERE id_usuario = '".(int)$id."'");
		
    }


    public function inserir($dados) {

        $this->connection->query("INSERT INTO tb_usuarios (nome, cpf, rg, escolaridade, telefone, celular, email, senha, endereco,bairro, numero, cidade, cep,estado, nome_pai, nome_mae, naturalidade, altura, peso, posicao, pe_preferido, caracteristicas, historico) VALUES ('".$dados['nome']."', '".$dados['cpf']."', '".$dados['rg']."', '".$dados['escolaridade']."', '".$dados['telefone']."', '".$dados['celular']."', '".$dados['email']."', '".$dados['senha']."','".$dados['endereco']."','".$dados['bairro']."', '".$dados['numero']."', '".$dados['cidade']."', '".$dados['cep']."', '".$dados['estado']."','".$dados['nome_pai']."', '".$dados['nome_mae']."', '".$dados['naturalidade']."', '".$dados['altura']."',  '".$dados['peso']."', '".$dados['posicao']."', '".$dados['pe_preferido']."', '".$dados['caracteristicas']."', '".$dados['historico']."')");
		  
    }

    public function alterar($dados) {

		return $this->connection->query("UPDATE tb_usuarios SET nome = '".$dados['nome']."', cpf = '".$dados['cpf']."', rg = '".$dados['rg']."', escolaridade = '".$dados['escolaridade']."', telefone = '".$dados['telefone']."', celular = '".$dados['celular']."', email = '".$dados['email']."', senha = '".$dados['senha']."', endereco = '".$dados['endereco']."', bairro = '".$dados['bairro']."', numero = '".$dados['numero']."', cep = '".$dados['cep']."', cidade = '".$dados['cidade']."', estado = '".$dados['estado']."', nome_pai = '".$dados['nome_pai']."', nome_mae = '".$dados['nome_mae']."', naturalidade = '".$dados['naturalidade']."', altura = '".$dados['altura']."', peso = '".$dados['peso']."', posicao = '".$dados['posicao']."', pe_preferido = '".$dados['pe_preferido']."', caracteristicas = '".$dados['caracteristicas']."', historico = '".$dados['historico']."' WHERE id_usuario = '".$dados['id_usuario']."'");
			
    }


    public function excluir($id) {

        $this->connection->query("DELETE FROM tb_usuarios where id_usuario = ".(int)$id);

    }
	
	public function verificaEmail($email){

		return $this->connection->query("SELECT * FROM `tb_usuarios` WHERE email = '".$this->connection->escape($email)."'")->num_rows;
		
	}
	
	public function verificaLogin($dados){

		$dados = $this->connection->query("SELECT * FROM `tb_usuarios` WHERE email = '".$this->connection->escape($dados['email'])."' AND senha = '".$this->connection->escape($dados['senha'])."' LIMIT 1") ;
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
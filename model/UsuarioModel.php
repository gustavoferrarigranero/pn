<?php

class UsuarioModel {
	
	private $connection;

    public function __construct() {
		require_once('model/Connection.php');
		$this->connection = new	Connection();	
	}

    



    public function listar() {

        return $this->connection->query("SELECT id_usuario, nome, cpf, rg, escolaridade, telefone, celular, email, senha, endereco, numero, cidade, estado, nome_pai, nome_mae, naturalidade, altura, peso, posicao, pe_preferido, caracteristicas, historico FROM tb_usuarios ORDER BY nome");
		
    }



    public function get($id) {

        return $this->connection->query("SELECT * FROM tb_usuarios WHERE id_usuario = '".(int)$id."'");
		
    }


    public function inserir($dados) {

        $this->connection->query("INSERT INTO tb_usuarios (nome, cpf, rg, escolaridade, telefone, celular, email, senha, endereco, numero, cidade, estado, nome_pai, nome_mae, naturalidade, altura, peso, posicao, pe_preferido, caracteristicas, historico) VALUES ('".$dados['nome']."', '".$dados['cpf']."', '".$dados['rg']."', '".$dados['escolaridade']."', '".$dados['telefone']."', '".$dados['celular']."', '".$dados['email']."', '".$dados['senha']."','".$dados['endereco']."', '".$dados['numero']."', '".$dados['cidade']."', '".$dados['estado']."','".$dados['nome_pai']."', '".$dados['nome_mae']."', '".$dados['naturalidade']."', '".$dados['altura']."',  '".$dados['peso']."', '".$dados['posicao']."', '".$dados['pe_preferido']."', '".$dados['caracteristicas']."', '".$dados['historico']."')");
		  
    }

    public function alterar($dados) {

		$this->connection->query("UPDATE tb_usuarios SET nome = '".$dados['nome']."', cpf = '".$dados['cpf']."', rg = '".$dados['rg']."', escolaridade = '".$dados['escolaridade']."', telefone = '".$dados['telefone']."', celular = '".$dados['celular']."', email = '".$dados['email']."', senha = '".$dados['senha']."', endereco = '".$dados['endereco']."', numero = '".$dados['numero']."', cidade = '".$dados['cidade']."', estado = '".$dados['estado']."', nome_pai = '".$dados['nome_pai']."', nome_mae = '".$dados['nome_mae']."', naturalidade = '".$dados['naturalidade']."', altura = '".$dados['altura']."', peso = '".$dados['peso']."', posicao = '".$dados['posicao']."', pe_preferido = '".$dados['pe_preferido']."', caracteristicas = '".$dados['caracteristicas']."', historico = '".$dados['historico']."' WHERE id_usuario = '".$dados['id_usuario']."'");

    }


    public function excluir($id) {

        $this->connection->query("DELETE FROM tb_usuarios where id_usuario = ".(int)$id);

    }

}
?>
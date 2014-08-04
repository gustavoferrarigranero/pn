<?php

	class Olheiro extends OlheiroModel {


		public function __construct() {}
		

		public function listarTodos() {
			

			return $this->listarOlheiros();
		}	
		

		public function incluir() {
			
            $this->setNome(utf8_decode($_POST["nome"]));
            $this->setCpf(utf8_decode($_POST["cpf"]));
            $this->setTelefone(utf8_decode($_POST["telefone"]));
            $this->setCelular(utf8_decode($_POST["celular"]));
			$this->setEndereco(utf8_decode($_POST["endereco"]));
            $this->setCidade(utf8_decode($_POST["cidade"]));
            $this->setEstado(utf8_decode($_POST["estado"]));
			$this->setNumero(utf8_decode($_POST["numero"]));
			$this->setEntidade(utf8_decode($_POST["entidade"]));
            $this->setEmail(utf8_decode($_POST["email"]));
            $this->setSenha(utf8_decode($_POST["senha"]));

        		

			$resultado = $this->inserirOlheiro();
			
			
			return $resultado;		
		}
		
		
		public function alterar() {
			
			
			$this->setIdOlheiro($_POST["id_olheiro"]);
            $this->setNome(utf8_decode($_POST["nome"]));
            $this->setCpf(utf8_decode($_POST["cpf"]));
            $this->setTelefone(utf8_decode($_POST["telefone"]));
            $this->setCelular(utf8_decode($_POST["celular"]));
			$this->setEndereco(utf8_decode($_POST["endereco"]));
            $this->setCidade(utf8_decode($_POST["cidade"]));
            $this->setEstado(utf8_decode($_POST["estado"]));
            $this->setNumero(utf8_decode($_POST["numero"]));
            $this->setEntidade(utf8_decode($_POST["entidade"]));
            $this->setEmail(utf8_decode($_POST["email"]));
            $this->setSenha(utf8_decode($_POST["senha"]));

			$resultado = $this->alterarOlheiro();
			
			return $resultado;		
		}
		
		public function excluir($id_olheiro) {
		
			$this->setIdOlheiro($id_olheiro);

			return $this->excluirOlheiro();
		}


		public function buscar($id_olheiro) {

			$this->setIdOlheiro($id_olheiro);

			$dados_olheiro = mysql_fetch_assoc($this->buscarOlheiro());

            $this->setNome($dados_olheiro["nome"]);
            $this->setCpf($dados_olheiro["cpf"]);
            $this->setTelefone($dados_olheiro["telefone"]);
            $this->setCelular($dados_olheiro["celular"]);
			$this->setEndereco($dados_olheiro["endereco"]);
            $this->setCidade($dados_olheiro["cidade"]);
            $this->setEstado($dados_olheiro["estado"]);
			$this->setNumero($dados_olheiro["numero"]);
			$this->setEntidade($dados_olheiro["entidade"]);
            $this->setEmail($dados_olheiro["email"]);
            $this->setSenha($dados_olheiro["senha"]);

		}
	}		
?>
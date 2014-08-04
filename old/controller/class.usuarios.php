<?php

	class Usuario extends UsuarioModel {

		public function __construct() {}
		
		
		public function listarTodos() {
			
			return $this->listarUsuarios();
		}	
		
		
		public function incluir() {
			
			
            $this->setNome(utf8_decode($_POST["nome"]));
            $this->setCpf(utf8_decode($_POST["cpf"]));
            $this->setRg(utf8_decode($_POST["rg"]));
            $this->setEscolaridade(utf8_decode($_POST["escolaridade"]));
            $this->setTelefone(utf8_decode($_POST["telefone"]));
            $this->setCelular(utf8_decode($_POST["celular"]));
            $this->setEmail(utf8_decode($_POST["email"]));
            $this->setSenha(utf8_decode($_POST["senha"]));
            $this->setEndereco(utf8_decode($_POST["endereco"]));
            $this->setNumero(utf8_decode($_POST["numero"]));
            $this->setCidade(utf8_decode($_POST["cidade"]));
            $this->setEstado(utf8_decode($_POST["estado"]));
            $this->setNomePai(utf8_decode($_POST["nome_pai"]));
            $this->setNomeMae(utf8_decode($_POST["nome_mae"]));
            $this->setNaturalidade(utf8_decode($_POST["naturalidade"]));
            $this->setAltura(utf8_decode($_POST["altura"]));
            $this->setPeso(utf8_decode($_POST["peso"]));
            $this->setPosicao(utf8_decode($_POST["posicao"]));
            $this->setPePreferido(utf8_decode($_POST["pe_preferido"]));
            $this->setCaracteristicas(utf8_decode($_POST["caracteristicas"]));
            $this->setHistorico(utf8_decode($_POST["historico"]));
			
			
			$resultado = $this->inserirUsuario();
			
			return $resultado;		
		}
		
		public function alterar() {
			
			
			$this->setIdUsuario($_POST["id_usuario"]);
            $this->setNome(utf8_decode($_POST["nome"]));
            $this->setCpf(utf8_decode($_POST["cpf"]));
            $this->setRg(utf8_decode($_POST["rg"]));
            $this->setEscolaridade(utf8_decode($_POST["escolaridade"]));
            $this->setTelefone(utf8_decode($_POST["telefone"]));
            $this->setCelular(utf8_decode($_POST["celular"]));
            $this->setEmail(utf8_decode($_POST["email"]));
            $this->setSenha(utf8_decode($_POST["senha"]));
            $this->setEndereco(utf8_decode($_POST["endereco"]));
            $this->setNumero(utf8_decode($_POST["numero"]));
            $this->setCidade(utf8_decode($_POST["cidade"]));
            $this->setEstado(utf8_decode($_POST["estado"]));
            $this->setNomePai(utf8_decode($_POST["nome_pai"]));
            $this->setNomeMae(utf8_decode($_POST["nome_mae"]));
            $this->setNaturalidade(utf8_decode($_POST["naturalidade"]));
            $this->setAltura(utf8_decode($_POST["altura"]));
            $this->setPeso(utf8_decode($_POST["peso"]));
            $this->setPosicao(utf8_decode($_POST["posicao"]));
            $this->setPePreferido(utf8_decode($_POST["pe_preferido"]));
            $this->setCaracteristicas(utf8_decode($_POST["caracteristicas"]));
            $this->setHistorico(utf8_decode($_POST["historico"]));
			
			
			$resultado = $this->alterarUsuario();
			
			
			return $resultado;		
		}
		
		public function excluir($id_usuario) {
			
			$this->setIdUsuario($id_usuario);
			
			return $this->excluirUsuario();
		}


		public function buscar($id_usuario) {

			$this->setIdUsuario($id_usuario);

			$dados_usuario = mysql_fetch_assoc($this->buscarUsuario());

            $this->setNome($dados_usuario["nome"]);
            $this->setCpf($dados_usuario["cpf"]);
            $this->setRg($dados_usuario["rg"]);
            $this->setEscolaridade($dados_usuario["escolaridade"]);
            $this->setTelefone($dados_usuario["telefone"]);
            $this->setCelular($dados_usuario["celular"]);
            $this->setEmail($dados_usuario["email"]);
            $this->setSenha($dados_usuario["senha"]);
            $this->setEndereco($dados_usuario["endereco"]);
            $this->setNumero($dados_usuario["numero"]);
            $this->setCidade($dados_usuario["cidade"]);
            $this->setEstado($dados_usuario["estado"]);
            $this->setNomePai($dados_usuario["nome_pai"]);
            $this->setNomeMae($dados_usuario["nome_mae"]);
            $this->setNaturalidade($dados_usuario["naturalidade"]);
            $this->setAltura($dados_usuario["altura"]);
            $this->setPeso($dados_usuario["peso"]);
            $this->setPosicao($dados_usuario["posicao"]);
            $this->setPePreferido($dados_usuario["pe_preferido"]);
            $this->setCaracteristicas($dados_usuario["caracteristicas"]);
            $this->setHistorico($dados_usuario["historico"]);

		}
	}		
?>
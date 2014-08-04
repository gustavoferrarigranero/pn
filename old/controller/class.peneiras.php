<?php
	
		
	class Peneira extends PeneiraModel {


		public function __construct() {}
		

		public function listarTodos() {
			

			return $this->listarPeneiras();
		}	
		


		public function incluir() {
		
			$data = explode("/", $_POST["Data"]);
			$data_formatada = $data[2]."-".$data[1]."-".$data[0];
			
            $this->setIdentificacao(utf8_decode($_POST["identificacao"]));
            $this->setLocal(utf8_decode($_POST["local"]));
            $this->setCep(utf8_decode($_POST["cep"]));
            $this->setCidade(utf8_decode($_POST["cidade"]));
            $this->setEstado(utf8_decode($_POST["estado"]));
            $this->setData($data_formatada);
            $this->setHora_inicial(utf8_decode($_POST["hora_inicial"]));
            $this->setN_jogadores(utf8_decode($_POST["n_jogadores"]));
            $this->setDuracao(utf8_decode($_POST["duracao"]));
            $this->setN_atacante(utf8_decode($_POST["n_atacante"]));
            $this->setN_meio(utf8_decode($_POST["n_meio"]));
            $this->setN_lateral_e(utf8_decode($_POST["n_lateral_e"]));
            $this->setN_lateral_d(utf8_decode($_POST["n_lateral_d"]));
            $this->setN_zagueiro(utf8_decode($_POST["n_zagueiro"]));
            $this->setN_goleiro(utf8_decode($_POST["n_goleiro"]));

        		

			$resultado = $this->inserirPeneira();
			
			
			return $resultado;		
		}
		
		
		public function alterar() {


			$this->setIdPeneira($_POST["id_peneira"]);
            $this->setIdentificacao(utf8_decode($_POST["identificacao"]));
            $this->setLocal(utf8_decode($_POST["local"]));
            $this->setCep(utf8_decode($_POST["cep"]));
            $this->setCidade(utf8_decode($_POST["cidade"]));
            $this->setEstado(utf8_decode($_POST["estado"]));
            $this->setData($data_formatada);
            $this->setHora_inicial(utf8_decode($_POST["hora_inicial"]));
            $this->setN_jogadores(utf8_decode($_POST["n_jogadores"]));
            $this->setDuracao(utf8_decode($_POST["duracao"]));
            $this->setN_atacante(utf8_decode($_POST["n_atacante"]));
            $this->setN_meio(utf8_decode($_POST["n_meio"]));
            $this->setN_lateral_e(utf8_decode($_POST["n_lateral_e"]));
            $this->setN_lateral_d(utf8_decode($_POST["n_lateral_d"]));
            $this->setN_zagueiro(utf8_decode($_POST["n_zagueiro"]));
            $this->setN_goleiro(utf8_decode($_POST["n_goleiro"]));
			
			
			$resultado = $this->alterarPeneira();
			
			
			return $resultado;		
		}
		
		
		
		public function excluir($id_peneira) {
		
		
			$this->setId_peneira($id_peneira);


			return $this->excluirPeneira();
		}


		public function buscar($id_peneira) {

			$this->setId_Peneira($id_peneira);

			$dados_peneira = mysql_fetch_assoc($this->buscarPeneira());

            $this->setIdentificacao($dados_peneira["identificacao"]);
            $this->setLocal($dados_peneira["local"]);
            $this->setCep($dados_peneira["cep"]);
            $this->setCidade($dados_peneira["cidade"]);
            $this->setEstado($dados_peneira["estado"]);
            $this->setData($dados_peneira["Data"]);
            $this->setHora_inicial($dados_peneira["hora_inicial"]);
            $this->setN_jogadores($dados_peneira["n_jogadores"]);
            $this->setDuracao($dados_peneira["duracao"]);
            $this->setN_atacante($dados_peneira["n_atacante"]);
            $this->setN_meio($dados_peneira["n_meio"]);
            $this->setN_lateral_e($dados_peneira["n_lateral_e"]);
            $this->setN_lateral_d($dados_peneira["n_lateral_d"]);
            $this->setN_zagueiro($dados_peneira["n_zagueiro"]);
            $this->setN_goleiro($dados_peneira["n_goleiro"]);

		}
	}		
?>
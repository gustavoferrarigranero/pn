<?php

	include_once("../model/class.dao.php");
	include_once("../model/class.peneiras.php");
	include_once("../controller/class.peneiras.php");
	
	$peneira = new Peneira();
	
	
	$acao = (isset($_POST["acao"])) ? $_POST["acao"] : ((isset($_GET["acao"])) ? $_GET["acao"] : "");	
	
	
	$id_peneira = (isset($_GET["id_peneira"])) ? $_GET["id_peneira"] : 0;


	if ($id_peneira > 0) {
		
		$peneira->buscar($id_peneira);
	}	
	
	if ($acao != "") {
			
		if ($acao == "incluir") { 
			
			if ($peneira->incluir()) { 
				
				echo "<script>alert('Peneira Cadastrada!');</script>";
				echo "<script>window.location = 'painel.php';</script>";
			} else {
			
				echo "<script>alert('Erro ao cadastrar!')</script>";
			}
				
		
		} elseif ($acao == "alterar") {  
			
			if ($peneira->alterar()) {  
				
				echo "<script>alert('Peneira AlteradA!')</script>";
				echo "<script>window.location = 'painel.php';</script>";
			} else {
			
				echo "<script>alert('Erro ao alterar!')</script>";
			}			
		
		} elseif ($acao == "excluir") {
		
			$retorno = $peneira->excluir($id_peneira);
			
			if ($retorno) {  
				
				echo "<script>alert('Peneira Excluida!')</script>";
				echo "<script>window.location = 'painel.php';</script>";
			} else {
			
				echo "<script>alert('Erro ao excluir!')</script>";
			}			
		}
	}
?>

<div id="box_Peneiras" class="box_home" style="display:none">


	<form name="form_peneiras" id="form_peneiras" method="post" action="painel.php">
		<input type="hidden" name="acao" id="acao" value="<?php echo ($id_peneira > 0) ? "alterar" : "incluir" ?>" />
	
		<label for="id_peneira">Id</label>
		<input type="text" name="id_peneira" id="id_peneira" value="<?php echo $peneira->getId_peneira() ?>" />
		<br /><br />
		
		<label for="identificacao">Identificacao</label>
		<input type="text" name="identificacao" id="identificacao" value="<?php echo $peneira->getIdentificacao() ?>" />
		<br /><br />

        <label for="local">Local</label>
        <input type="text" name="local" id="local" value="<?php echo $peneira->getLocal() ?>" />
        <br /><br />

        <label for="cep">Cep</label>
        <input type="text" name="cep" id="cep" value="<?php echo $peneira->getCep() ?>" class="#cep" /> 
        <br /><br />

        <label for="cidade">Cidade</label>
        <input type="text" name="cidade" id="cidade" value="<?php echo $peneira->getCidade() ?>" />
        <br /><br />

        <label for="estado">Estado</label>
        <input type="text" name="estado" id="estado" value="<?php echo $peneira->getEstado() ?>" />
        <br /><br />

        <label for="data">Data</label>
        <input type="text" name="data" id="data" value="<?php echo $peneira->getData() ?>" class="data"/>
        <br /><br />

        <label for="hora_inicial">Hora Inicial</label>
        <input type="text" name="hora_inicial" id="hora_inicial" value="<?php echo $peneira->getHora_inicial() ?>" />
        <br /><br />
        
        <label for="Jogadores">Numero de Jogadores</label>
        <input type="text" name="Jogadores" id="Jogadores" value="<?php echo $peneira->getN_jogadores() ?>"/>
        <br /><br />
        
        <label for="duracao">Duracao</label>
        <input type="text" name="duracao" id="duracao" value="<?php echo $peneira->getDuracao() ?>" />
        <br /><br />
        
        <label for="n_atacante">Numero de Atacante</label>
        <input type="text" name="n_atacante" id="n_atacante" value="<?php echo $peneira->getN_atacante() ?>" />
        <br /><br />

        <label for="n_meio">Numero de Meias</label>
        <input type="text" name="n_meio" id="n_meio" value="<?php echo $peneira->getN_meio() ?>" />
        <br /><br />
        
        <label for="Lateral_e">Numero de Laterais Esquerdo</label>
        <input type="text" name="Lateral_e" id="Lateral_e" readonly="readonly" value="<?php echo $peneira->getN_lateral_e() ?>" />
        <br /><br />
        
        <label for="n_lateral_d">Numero de Laterais Direitos</label>
        <input type="text" name="n_lateral_d" id="n_lateral_d" readonly="readonly" value="<?php echo $peneira->getN_lateral_d() ?>" />
        <br /><br />
        
        <label for="n_zagueiro">Numero de Zagueiros</label>
        <input type="text" name="n_zagueiro" id="n_zagueiro" readonly="readonly" value="<?php echo $peneira->getN_zagueiro() ?>" />
        <br /><br />
                
        <label for="n_goleiro">Numero de Goleiros</label>
        <input type="text" name="n_goleiro" id="n_goleiro" readonly="readonly" value="<?php echo $peneira->getN_goleiro() ?>" />
        <br /><br />
		
		<input type="submit" name="gravar" id="gravar" value="Gravar Dados" />
		
	</form>
</div>
<?php
	if (isset($_GET["id_peneira"]) && $_GET["id_peneira"]>0) {
?>

<script language="javascript" type="text/javascript">

	$(document).ready(function() {
    $("#box_Peneiras").slideDown("slow");
});

function DefPosicao(){

	var jogadores = $("#Jogadores").val();
	
	if (jogadores != ""){
		if (jogadores < 10){
			alert ("O numero de jogadores deve ser maior que 10");
			$('#Jogadores').val("");
			$('#Lateral_e').val("");
			$('#Lateral_d').val("");
			$('#Goleiro').val("");
			$('#Atacante').val("");
			$('#Zagueiro').val("");
			$('#Meio').val("");
			$('#Jogadores').focus();	
		}
		else {
				var pLateral_e = 9;
				var pLateral_d = 9;
				var pGoleiro = 10;
				var pAtacante =18;
				var pZagueiro =18;
				var pMeio =36;
				
				var lateral_e = parseInt(jogadores * pLateral_e / 100);
				var lateral_d = parseInt(jogadores * pLateral_d / 100);
				var goleiro = parseInt(jogadores * pGoleiro / 100);
				var atacante = parseInt(jogadores * pAtacante / 100);
				var zagueiro = parseInt(jogadores * pZagueiro / 100);
				var meio = parseInt(jogadores * pMeio / 100);
				var difDivi = jogadores - (lateral_e+lateral_d+goleiro+atacante+zagueiro+meio);
				var meio = meio + difDivi;
				
				$('#Lateral_e').val(lateral_e);
				$('#Lateral_d').val(lateral_d);
				$('#Goleiro').val(goleiro);
				$('#Atacante').val(atacante);
				$('#Zagueiro').val(zagueiro);
				$('#Meio').val(meio);
				$('#teste').html(meio);
			}
	} 
	else {
		  $('#Lateral_e').val("");
		  $('#Lateral_d').val("");
		  $('#Goleiro').val("");
		  $('#Atacante').val("");
		  $('#Zagueiro').val("");
		  $('#Meio').val("");
		  }
}


$(document).ready(function(){
	$("#Jogadores").blur(DefPosicao);
	});
</script>


<?php
}
?>
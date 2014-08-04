<?php

	include_once("../model/class.dao.php");
	include_once("../model/class.olheiros.php");
	include_once("../controller/class.olheiros.php");
	
	$olheiro = new Olheiro();
	
	
	$acao = (isset($_POST["acao"])) ? $_POST["acao"] : ((isset($_GET["acao"])) ? $_GET["acao"] : "");	
	
	
	$id_olheiro = (isset($_GET["id_olheiro"])) ? $_GET["id_olheiro"] : 0;
	
	
	if ($id_olheiro > 0) {
		
		$olheiro->buscar($id_olheiro);
	}	
	
	
	if ($acao != "") {
			
		if ($acao == "incluir") { 
			
			if ($olheiro->incluir()) { 
				
				echo "<script>alert('Olheiro Cadastrado!');</script>";
				echo "<script>window.location = 'painel.php';</script>";
			} else {
			
				echo "<script>alert('Erro ao cadastrar!')</script>";
			}
				
		
		} elseif ($acao == "alterar") { 
			
			if ($olheiro->alterar()) { 
				
				echo "<script>alert('Olheiro Alterado!')</script>";
				echo "<script>window.location = 'painel.php';</script>";
			} else {
			
				echo "<script>alert('Erro ao alterar!')</script>";
			}			
		
		} elseif ($acao == "excluir") { 
		
			$retorno = $olheiro->excluir($id_olheiro);
			
			if ($retorno) { 
				
				echo "<script>alert('Olheiro Excluido!')</script>";
				echo "<script>window.location = 'painel.php';</script>";
			} else {
			
				echo "<script>alert('Erro ao excluir!')</script>";
			}			
		}
	}
?>
<div id="box_Olheiros" class="box_home" style="display:none">

	<form name="form_olheiros" id="form_olheiros" method="post" action="painel.php">
		<input type="hidden" name="acao" id="acao" value="<?php echo ($id_olheiro > 0) ? "alterar" : "incluir" ?>" />
	
		<label for="id_olheiro">Id</label>
		<input type="text" name="id_olheiro" id="id_olheiro" value="<?php echo $olheiro->getIdOlheiro() ?>" />
		<br /><br />
		
		<label for="nome">Nome</label>
		<input type="text" name="nome" id="nome" value="<?php echo $olheiro->getNome() ?>" />
		<br /><br />

        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" value="<?php echo $olheiro->getCpf() ?>" class="#cpf" />
        <br /><br />

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" value="<?php echo $olheiro->getTelefone() ?>" class="#fone" />
        <br /><br />

        <label for="celuar">Celular</label>
        <input type="text" name="celular" id="celular" value="<?php echo $olheiro->getCelular() ?>" class="#cel" />
        <br /><br />

        <label for="endereco">Endereco</label>
        <input type="text" name="endereco" id="endereco" value="<?php echo $olheiro->getEndereco() ?>" />
        <br /><br />

        <label for="cidade">Cidade</label>
        <input type="text" name="cidade" id="cidade" value="<?php echo $olheiro->getCidade() ?>" />
        <br /><br />

        <label for="estado">Estado</label>
        <input type="text" name="estado" id="estado" value="<?php echo $olheiro->getEstado() ?>" />
        <br /><br />
        
        <label for="numero">Numero</label>
        <input type="text" name="numero" id="numero" value="<?php echo $olheiro->getNumero() ?>" />
        <br /><br />
        
        <label for="entidade">Entidade</label>
        <input type="text" name="entidade" id="entidade" value="<?php echo $olheiro->getEntidade() ?>" />
        <br /><br />
        
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?php echo $olheiro->getEmail() ?>" />
        <br /><br />

        <label for="senha">Senha</label>
        <input type="text" name="senha" id="senha" value="<?php echo $olheiro->getSenha() ?>" />
        <br /><br />
		
		<input type="submit" name="gravar" id="gravar" value="Gravar Dados" />
		
	</form>

</div>
<?php
	if (isset($_GET["id_olheiro"]) && $_GET["id_olheiro"]>0) {
?>

         
<script language="javascript" type="text/javascript">

$(document).ready(function() {
    $("#box_Olheiros").slideDown("slow");
});

</script>
<?php
}
?>
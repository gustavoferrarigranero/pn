<?php

	include_once("../model/class.dao.php");
	include_once("../model/class.usuarios.php");
	include_once("../controller/class.usuarios.php");
	
	$usuario = new Usuario();
	
   
	$acao = (isset($_POST["acao"])) ? $_POST["acao"] : ((isset($_GET["acao"])) ? $_GET["acao"] : "");	
	
	
	$id_usuario = (isset($_GET["id_usuario"])) ? $_GET["id_usuario"] : 0;
	
	
	if ($id_usuario > 0) {
		
		$usuario->buscar($id_usuario);
	}	
	

	if ($acao != "") {
			
		if ($acao == "incluir") { 
			
			if ($usuario->incluir()) { 
				
				echo "<script>alert('Usuario Cadastrado!');</script>";
				echo "<script>window.location = 'painel.php';</script>";
			} else {
			
				echo "<script>alert('Erro ao cadastrar!')</script>";
			}
				
		
		} elseif ($acao == "alterar") { 
			
			if ($usuario->alterar()) { 
				
				echo "<script>alert('Usuario Alterado!')</script>";
				echo "<script>window.location = 'painel.php';</script>";
			} else {
			
				echo "<script>alert('Erro ao alterar!')</script>";
			}			
		
		} elseif ($acao == "excluir") {
		
			$retorno = $usuario->excluir($id_usuario);
			
			if ($retorno) { 
				
				echo "<script>alert('Jogador Excluido!')</script>";
				echo "<script>window.location = 'painel.php';</script>";
			} else {
			
				echo "<script>alert('Erro ao excluir!')</script>";
			}			
		}
	}
?>
<div id="box_Usuarios" class="box_home" style="display:none">

	<form name="form_usuarios" id="form_usuaios" method="post" action="painel.php">
		<input type="hidden" name="acao" id="acao" value="<?php echo ($id_usuario > 0) ? "alterar" : "incluir" ?>" />
	
		<label for="id_usuario">Id</label>
		<input type="text" name="id_usuario" id="id_usuario" value="<?php echo $usuario->getIdUsuario() ?>" />
		<br /><br />
		
		<label for="nome">Nome</label>
		<input type="text" name="nome" id="nome" value="<?php echo $usuario->getNome() ?>" />
		<br /><br />

        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" value="<?php echo $usuario->getCpf() ?>" />
        <br /><br />

        <label for="rg">RG</label>
        <input type="text" name="rg" id="rg" value="<?php echo $usuario->getRg() ?>" />
        <br /><br />

        <label for="escolaridade">Escolaridade</label>
        <input type="text" name="escolaridade" id="escolaridade" value="<?php echo $usuario->getEscolaridade() ?>" />
        <br /><br />

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" value="<?php echo $usuario->getTelefone() ?>" />
        <br /><br />

        <label for="celuar">Celular</label>
        <input type="text" name="celular" id="celular" value="<?php echo $usuario->getCelular() ?>" />
        <br /><br />

        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?php echo $usuario->getEmail() ?>" />
        <br /><br />

        <label for="senha">Senha</label>
        <input type="text" name="senha" id="senha" value="<?php echo $usuario->getSenha() ?>" />
        <br /><br />

        <label for="endereco">Endereco</label>
        <input type="text" name="endereco" id="endereco" value="<?php echo $usuario->getEndereco() ?>" />
        <br /><br />

        <label for="numero">Numero</label>
        <input type="text" name="numero" id="numero" value="<?php echo $usuario->getNumero() ?>" />
        <br /><br />

        <label for="cidade">Cidade</label>
        <input type="text" name="cidade" id="cidade" value="<?php echo $usuario->getCidade() ?>" />
        <br /><br />

        <label for="estado">Estado</label>
        <input type="text" name="estado" id="estado" value="<?php echo $usuario->getEstado() ?>" />
        <br /><br />

        <label for="nome_pai">Nome do Pai</label>
        <input type="text" name="nome_pai" id="nome_pai" value="<?php echo $usuario->getNomePai() ?>" />
        <br /><br />

        <label for="nome_mae">Nome da Mae</label>
        <input type="text" name="nome_mae" id="nome_mae" value="<?php echo $usuario->getNomeMae() ?>" />
        <br /><br />

        <label for="naturalidade">Naturalidade</label>
        <input type="text" name="naturalidade" id="naturalidade" value="<?php echo $usuario->getNaturalidade() ?>" />
        <br /><br />

        <label for="altura">Altura</label>
        <input type="text" name="altura" id="altura" value="<?php echo $usuario->getAltura() ?>" />
        <br /><br />

        <label for="peso">Peso</label>
        <input type="text" name="peso" id="peso" value="<?php echo $usuario->getPeso() ?>" />
        <br /><br />

        <label for="posicao">Posicao</label>
        <input type="text" name="posicao" id="posicao" value="<?php echo $usuario->getPosicao() ?>" />
        <br /><br />

        <label for="pe_preferido">Pe preferido</label>
        <input type="text" name="pe_preferido" id="pe_preferido" value="<?php echo $usuario->getPePreferido() ?>" />
        <br /><br />

        <label for="caracteristicas">Caracteristicas</label>
        <input type="text" name="caracteristicas" id="caracteristicas" value="<?php echo $usuario->getCaracteristicas() ?>" />
        <br /><br />

        <label for="historico">Historico</label>
        <input type="text" name="historico" id="historico" value="<?php echo $usuario->getHistorico() ?>" />
        <br /><br />
		
		<input type="submit" name="gravar" id="gravar" value="Gravar Dados" />
		
	</form>
</div>

<?php
	if (isset($_GET["id_usuario"]) && $_GET["id_usuario"]>0) {
?>

         
<script language="javascript" type="text/javascript">

$(document).ready(function() {
    $("#box_Usuarios").slideDown("slow");
});

</script>
<?php
}
?>
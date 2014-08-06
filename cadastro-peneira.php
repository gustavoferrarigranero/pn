<?php
require_once("config.php");
if(!isset($_SESSION['usuario']) || !$_SESSION['usuario']){
	if($_SESSION['usuario'] == 1){
		header("Location: ".URL);	
		exit();
	}
	header("Location: ".URL);	
	exit();
}
if($_SERVER['REQUEST_METHOD'] == "POST"){
	require_once("controller/UsuarioController.php");
	$controller = new UsuarioController();
	$controller->alterar($_POST);	
	header("Location: ".URL."minha-conta.php");
	exit();
}
require_once("view/header.php");
?>
<script type="text/javascript" src="view/javascript/jquery-ui/external/jquery/jquery.js"></script>
<script type="text/javascript" src="view/javascript/jquery-ui/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="view/javascript/jquery-ui/jquery-ui.min.css"/>
<script type="text/javascript">
	$(document).ready(function(e) {
        $("input[name='dataNascimento']").datepicker({
			changeMonth: true,
			changeYear: true,
			monthNames: ["Janeiro","Fevereiro","Março","Abril","Maio","Junho",
			"Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"],
			monthNamesShort: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
			dayNamesMin: ["Dom","Seg","Ter","Qua","Qui","Sex","Sab"], // Column headings for days starting at Sunday
			dayNamesShort: ["Dom","Seg","Ter","Qua","Qui","Sex","Sab"], // Column headings for days starting at Sunday
			yearRange: "c-100:c+100",
			dateFormat: 'yy-mm-dd'
		});
    });	
</script>
<div id="center">
	<?php
    if(isset($_SESSION['erro'])){
		?>
		<div class="erro"><?php echo $_SESSION['erro'] ?></div>
		<?php
		unset($_SESSION['erro']);
	}
	if(isset($_SESSION['sucesso'])){
		?>
		<div class="sucesso"><?php echo $_SESSION['sucesso'] ?></div>
		<?php
		unset($_SESSION['sucesso']);
	}
	?>
    <form action="minha-conta.php" method="post" enctype="multipart/form-data">
		<table class="minhaconta">
        	<tr>
            	<td valign="top" width="250">
                    <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['usuario']['id_usuario'] ?>" />
                    Nome: <br /><input type="text" name="nome" value="<?php echo $_SESSION['usuario']['nome'] ?>" /><br /><br />
                    CPF(maiores de 16 anos): <br /><input type="text" name="cpf" value="<?php echo $_SESSION['usuario']['cpf'] ?>" /><br /><br />
                    RG(maiores de 16 anos): <br /><input type="text" name="rg" value="<?php echo $_SESSION['usuario']['rg'] ?>" /><br /><br />
                    
                    Escolaridade: <br /><input type="text" name="escolaridade" value="<?php echo $_SESSION['usuario']['escolaridade'] ?>" /><br /><br />
                    
                    Telefone: <br /><input type="text" name="telefone" value="<?php echo $_SESSION['usuario']['telefone'] ?>" /><br /><br />
                    
                    Celular: <br /><input type="text" name="celular" value="<?php echo $_SESSION['usuario']['celular'] ?>" /><br /><br />
                    
                    Email: <br /><input type="text" name="email" value="<?php echo $_SESSION['usuario']['email'] ?>" /><br /><br />
                    
                    Senha: <br /><input type="password" name="senha" value="<?php echo $_SESSION['usuario']['senha'] ?>" />
                    
                </td>
                <td valign="top" width="250">
                         
                    Endereço: <br /><input type="text" name="endereco" value="<?php echo $_SESSION['usuario']['endereco'] ?>" /><br /><br />
                    
                     Número: <br /><input type="text" name="numero" value="<?php echo $_SESSION['usuario']['numero'] ?>" /><br /><br />
                    
                    Bairro: <br /><input type="text" name="bairro" value="<?php echo $_SESSION['usuario']['bairro'] ?>" /><br /><br />
                    
                    Cidade: <br /><input type="text" name="cidade" value="<?php echo $_SESSION['usuario']['cidade'] ?>" /><br /><br />
                    
                    Estado: <br /><input type="text" name="estado" value="<?php echo $_SESSION['usuario']['estado'] ?>" /><br /><br />
                    
                    CEP: <br /><input type="text" name="cep" value="<?php echo $_SESSION['usuario']['cep'] ?>" /><br /><br />
                    
                    Nome do Pai: <br /><input type="text" name="nome_pai" value="<?php echo $_SESSION['usuario']['nome_pai'] ?>" /><br /><br />
                    
                    Nome da Mãe: <br /><input type="text" name="nome_mae" value="<?php echo $_SESSION['usuario']['nome_mae'] ?>" />
                    
                </td>
                <td valign="top" width="250">
                
                 	Naturalidade: <br /><input type="text" name="naturalidade" value="<?php echo $_SESSION['usuario']['naturalidade'] ?>" /><br /><br />
                    
                    Altura: <br /><input type="text" name="altura" value="<?php echo $_SESSION['usuario']['altura'] ?>" /><br /><br />
                    
                    Peso: <br /><input type="text" name="peso" value="<?php echo $_SESSION['usuario']['peso'] ?>" /><br /><br />
                    
                    Posição: <br /><input type="text" name="posicao" value="<?php echo $_SESSION['usuario']['posicao'] ?>" /><br /><br />
                    
                    Pé preferido: <br /><input type="text" name="pe_preferido" value="<?php echo $_SESSION['usuario']['pe_preferido'] ?>" /><br /><br />
                    
                    Características: <br /><textarea name="caracteristicas" cols="30" rows="2"><?php echo $_SESSION['usuario']['caracteristicas'] ?></textarea><br /><br />
                    
                    Histórico: <br /><textarea name="historico" cols="30" rows="2"><?php echo $_SESSION['usuario']['historico'] ?></textarea>
                    
                   
                </td>
            </tr>
            <tr>
            	<td align="center" colspan="3" style="padding-top:40px;">
                	<input type="submit" value="Alterar Cadastro" />
                </td>
            </tr>
        </table>
        
    </form>
</div>
<?php
require_once("view/footer.php");

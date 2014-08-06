<?php
require_once("config.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){
	
	require_once("controller/UsuarioController.php");
	$controller = new UsuarioController();
	$controller->inserir($_POST);	
	header("Location: ".URL."minha-conta.php");
	exit();
}
require_once("view/header.php");
?>
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
    <form action="cadastro.php" method="post" enctype="multipart/form-data">
		<table class="minhaconta">
        	<tr>
            	<td valign="top" width="250">
                    <input type="hidden" name="id_usuario" value="" />
                    Nome: <br /><input type="text" name="nome" value="" /><br /><br />
                    CPF(maiores de 16 anos): <br /><input type="text" name="cpf" value="" /><br /><br />
                    RG(maiores de 16 anos): <br /><input type="text" name="rg" value="" /><br /><br />
                    
                    Escolaridade: <br /><input type="text" name="escolaridade" value="" /><br /><br />
                    
                    Telefone: <br /><input type="text" name="telefone" value="" /><br /><br />
                    
                    Celular: <br /><input type="text" name="celular" value="" /><br /><br />
                    
                    Email: <br /><input type="text" name="email" value="" /><br /><br />
                    
                    Senha: <br /><input type="password" name="senha" value="" />
                    
                </td>
                <td valign="top" width="250">
                         
                    Endereço: <br /><input type="text" name="endereco" value="" /><br /><br />
                    
                     Número: <br /><input type="text" name="numero" value="" /><br /><br />
                    
                    Bairro: <br /><input type="text" name="bairro" value="" /><br /><br />
                    
                    Cidade: <br /><input type="text" name="cidade" value="" /><br /><br />
                    
                    Estado: <br /><input type="text" name="estado" value="" /><br /><br />
                    
                    CEP: <br /><input type="text" name="cep" value="" /><br /><br />
                    
                    Nome do Pai: <br /><input type="text" name="nome_pai" value="" /><br /><br />
                    
                    Nome da Mãe: <br /><input type="text" name="nome_mae" value="" />
                    
                </td>
                <td valign="top" width="250">
                
                 	Naturalidade: <br /><input type="text" name="naturalidade" value="" /><br /><br />
                    
                    Altura: <br /><input type="text" name="altura" value="" /><br /><br />
                    
                    Peso: <br /><input type="text" name="peso" value="" /><br /><br />
                    
                    Posição: <br /><input type="text" name="posicao" value="" /><br /><br />
                    
                    Pé preferido: <br /><input type="text" name="pe_preferido" value="" /><br /><br />
                    
                    Características: <br /><textarea name="caracteristicas" cols="30" rows="2"></textarea><br /><br />
                    
                    Histórico: <br /><textarea name="historico" cols="30" rows="2"></textarea>
                    
                   
                </td>
            </tr>
            <tr>
            	<td align="center" colspan="3" style="padding-top:40px;">
                	<input type="submit" value="Cadastrar Usuário" />
                </td>
            </tr>
        </table>
        
    </form>
</div>
<?php
require_once("view/footer.php");

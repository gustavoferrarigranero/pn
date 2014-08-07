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

require_once("controller/UsuarioController.php");
$controller = new UsuarioController();
$usuarios = $controller->listar()->rows ;

require_once("view/header.php");
?>
<div id="center">
    <form action="cadastro-peneira.php" method="post" enctype="multipart/form-data">
		<table class="minhaconta" style="background:#FFF;">
        	<tr style="background:#ccc">
            	<td valign="top">Nome</td>
                <td valign="top">Telefone</td>
                <td valign="top">Celular</td>
                <td valign="top">Naturalidade</td>
                <td valign="top">Posição</td>
                <td valign="top">Pé Preferido</td>
                <td valign="top">Links</td>
            </tr>
            <?php foreach($usuarios as $usuario){ ?>
                <tr>
                    <td valign="top" style="padding:10px;"><?php echo $usuario['nome'] ; ?></td>
                    <td valign="top" style="padding:10px;"><?php echo $usuario['telefone'] ; ?></td>
                    <td valign="top" style="padding:10px;"><?php echo $usuario['celular'] ; ?></td>
                    <td valign="top" style="padding:10px;"><?php echo $usuario['naturalidade'] ; ?></td>
                    <td valign="top" style="padding:10px;"><?php echo $usuario['posicao'] ; ?></td>
                    <td valign="top" style="padding:10px;"><?php echo $usuario['pe_preferido'] ; ?></td>
                    <td valign="top" style="padding:10px;"><a href="<?php echo URL ; ?>visualizar-jogador.php?id_usuario=<?php echo $usuario['id_usuario'] ; ?>">Visualizar</a></td>
                </tr>
            <?php } ?>
        </table>
        
    </form>
</div>
<?php
require_once("view/footer.php");
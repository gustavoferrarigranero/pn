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
$usuario = $controller->get($_GET['id_usuario'])->row ;

require_once("view/header.php");
?>
<div id="center">
	<table class="minhaconta">
        <tr>
            <td valign="top" width="250">
                Nome: <?php echo $usuario['nome'] ; ?><br /><br />
                CPF: <?php echo $usuario['cpf'] ; ?><br /><br />
                RG: <?php echo $usuario['rg'] ; ?><br /><br />
                Escolaridade: <?php echo $usuario['escolaridade'] ; ?><br /><br />
                Telefone: <?php echo $usuario['telefone'] ; ?><br /><br />
                Celular: <?php echo $usuario['celular'] ; ?><br /><br />
                Endereço: <?php echo $usuario['email'] ; ?><br /><br />
                Número: <?php echo $usuario['numero'] ; ?><br /><br />
                Bairro: <?php echo $usuario['bairro'] ; ?><br /><br />
                Cep: <?php echo $usuario['cep'] ; ?><br /><br />
                Cidade: <?php echo $usuario['cidade'] ; ?><br /><br />
                Estado: <?php echo $usuario['estado'] ; ?><br /><br />
                Nome do Pai: <?php echo $usuario['nome_pai'] ; ?><br /><br />
                Nome da Mãe: <?php echo $usuario['nome_mae'] ; ?><br /><br />
                Naturalidade: <?php echo $usuario['naturalidade'] ; ?><br /><br />
                Altura: <?php echo $usuario['altura'] ; ?><br /><br />
                Peso: <?php echo $usuario['peso'] ; ?><br /><br />
                Posição: <?php echo $usuario['posicao'] ; ?><br /><br />
                Pé Preferido: <?php echo $usuario['pe_preferido'] ; ?><br /><br />
                Características: <?php echo $usuario['caracteristicas'] ; ?><br /><br />
                Histórico: <?php echo $usuario['historico'] ; ?><br /><br />
            </td>
        </tr>
    </table>
</div>
<?php
require_once("view/footer.php");
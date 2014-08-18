<?php
require_once("config.php");

require_once("controller/PeneiraController.php");
$controllerPeneira = new PeneiraController();

$peneira = $controllerPeneira->get($_POST['id_peneira'])->row;

require_once("controller/UsuarioController.php");

$controller = new UsuarioController();

$dados = array();

$dados['campo'] = $_POST['filtro'];

if($_POST['filtro'] == "endereco"){
	$dados['valor'] = $peneira['endereco'];
} else if($_POST['filtro'] == "bairro"){
	$dados['valor'] = $peneira['bairro'];
} else if($_POST['filtro'] == "cidade"){
	$dados['valor'] = $peneira['cidade'];
} else if($_POST['filtro'] == "estado"){
	$dados['valor'] = $peneira['estado'];
}

if($controller->listar($dados)->num_rows){

$usuarios = $controller->listar($dados)->rows ;

?>
	<div id="center">
			<table class="minhaconta" style="background:#FFF;">
				<tr style="background:#ccc">
					<td valign="top">Nome</td>
                    <td valign="top">E-mail</td>
					<td valign="top">Telefone</td>
					<td valign="top">Celular</td>
					<td valign="top">Naturalidade</td>
					<td valign="top">Posição</td>
					<td valign="top">Pé Preferido</td>
					<td valign="top">Links</td>
                    <td valign="top">Ações</td>
				</tr>
				<?php foreach($usuarios as $usuario){ ?>
					<tr>
						<td valign="top" style="padding:10px;"><?php echo $usuario['nome'] ; ?></td>
                        <td valign="top" style="padding:10px;"><?php echo $usuario['email'] ; ?></td>
						<td valign="top" style="padding:10px;"><?php echo $usuario['telefone'] ; ?></td>
						<td valign="top" style="padding:10px;"><?php echo $usuario['celular'] ; ?></td>
						<td valign="top" style="padding:10px;"><?php echo $usuario['naturalidade'] ; ?></td>
						<td valign="top" style="padding:10px;"><?php echo $usuario['posicao'] ; ?></td>
						<td valign="top" style="padding:10px;"><?php echo $usuario['pe_preferido'] ; ?></td>
						<td valign="top" style="padding:10px;"><a href="<?php echo URL ; ?>visualizar-jogador.php?id_usuario=<?php echo $usuario['id_usuario'] ; ?>">Visualizar</a></td>
                        <td valign="top" style="padding:10px;"><a class="selecionar" id_usuario="<?php echo $usuario['id_usuario'] ; ?>" id_peneira="<?php echo $peneira['id_peneira'] ; ?>"  href="#">Enviar Email de Convite</a></td>
					</tr>
				<?php } ?>
			</table>
	</div>
<?php
}else{
	?>
	<div class="erro">Nenhum resultado Encontrado</div>
	<?php
}
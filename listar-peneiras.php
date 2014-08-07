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

require_once("controller/PeneiraController.php");
$controller = new PeneiraController();
$peneiras = $controller->listar()->rows ;

require_once("view/header.php");
?>
<div id="center">
    <form action="cadastro-peneira.php" method="post" enctype="multipart/form-data">
		<table class="minhaconta" style="background:#FFF;">
        	<tr style="background:#ccc">
            	<td valign="top">Identificação</td>
                <td valign="top">Local</td>
                <td valign="top">Cep</td>
                <td valign="top">Cidade</td>
                <td valign="top">Estado</td>
                <td valign="top">Data</td>
                <td valign="top">Hora Inicial</td>
                <td valign="top">Número de Jogadores</td>
                <td valign="top">Duração</td>
                <td valign="top">Links</td>
            </tr>
            <?php foreach($peneiras as $peneira){ ?>
                <tr>
                    <td valign="top" style="padding:10px;"><?php echo $peneira['identificacao'] ; ?></td>
                    <td valign="top" style="padding:10px;"><?php echo $peneira['local'] ; ?></td>
                    <td valign="top" style="padding:10px;"><?php echo $peneira['cep'] ; ?></td>
                    <td valign="top" style="padding:10px;"><?php echo $peneira['cidade'] ; ?></td>
                    <td valign="top" style="padding:10px;"><?php echo $peneira['estado'] ; ?></td>
                    <td valign="top" style="padding:10px;"><?php echo $peneira['data'] ; ?></td>
                    <td valign="top" style="padding:10px;"><?php echo $peneira['hora_inicial'] ; ?></td>
                    <td valign="top" style="padding:10px;"><?php echo $peneira['n_jogadores'] ; ?></td>
                    <td valign="top" style="padding:10px;"><?php echo $peneira['duracao'] ; ?></td>
                    <td valign="top" style="padding:10px;"><a href="<?php echo URL ; ?>visualizar-peneira.php?id_peneira=<?php echo $peneira['id_peneira'] ; ?>">Visualizar</a></td>
                </tr>
            <?php } ?>
        </table>
        
    </form>
</div>
<?php
require_once("view/footer.php");
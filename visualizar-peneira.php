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
if(isset($_GET['excluir'])){
	$controller->excluir($_GET);
	header("Location: ".URL.'listar-peneiras.php');	
	exit();
}


$peneira = $controller->get($_GET['id_peneira'])->row ;

require_once("view/header.php");
?>
<div id="center">
    <table class="minhaconta">
        <tr>
            <td valign="top" width="250">

                Identificação: <?php echo $peneira['identificacao'] ?><br /><br />
                
                Local: <?php echo $peneira['local'] ?><br /><br />
                
                Cep: <?php echo $peneira['cep'] ?><br /><br />
                
                Cidade: <?php echo $peneira['cidade'] ?><br /><br />
                
                Estado: <?php echo $peneira['estado'] ?><br /><br />
                
                Data: <?php echo $peneira['data'] ?><br /><br />
                
                Hora Inicial: <?php echo $peneira['hora_inicial'] ?><br /><br />
                
                Número de Jogadores: <?php echo $peneira['n_jogadores'] ?><br /><br />
                
                Duração: <?php echo $peneira['duracao'] ?>hs<br /><br />

            </td>
        </tr>
        <tr>
            <td valign="top" width="250"><br /><br />
				<a href="<?php echo URL ?>alterar-peneira.php?id_peneira=<?php echo $peneira['id_peneira'] ?>" onclick="if(!confirm('Deseja realmente alterar?'))return false;">Alterar</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <a href="#?excluir=1&id_peneira=<?php echo $peneira['id_peneira'] ?>" onclick="if(!confirm('Deseja realmente excluir?'))return false;">Excluir</a>
            </td>
        </tr>
    </table>
</div>
<?php
require_once("view/footer.php");
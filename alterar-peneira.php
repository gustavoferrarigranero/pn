<?php
require_once("config.php");
require_once("controller/PeneiraController.php");
$controller = new PeneiraController();
if(!isset($_SESSION['usuario']) || !$_SESSION['usuario']){
	if($_SESSION['usuario'] == 1){
		header("Location: ".URL);	
		exit();
	}
	header("Location: ".URL);	
	exit();
}
if($_SERVER['REQUEST_METHOD'] == "POST"){
	$controller->alterar($_POST);
	if($_SESSION['sucesso']){
		$id_peneira = $_SESSION['sucesso'];
		unset($_SESSION['sucesso']);
		header("Location: ".URL."visualizar-peneira.php?id_peneira=".$id_peneira);
		exit();
	}
	
}


$peneira = $controller->get($_GET['id_peneira'])->row ;
require_once("view/header.php");
?>
<script type="text/javascript" src="view/javascript/jquery-ui/external/jquery/jquery.js"></script>
<script type="text/javascript" src="view/javascript/jquery-ui/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="view/javascript/jquery-ui/jquery-ui.min.css"/>
<script type="text/javascript">
	$(document).ready(function(e) {
        $("input[name='data']").datepicker({
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
    <form action="alterar-peneira.php" method="post" enctype="multipart/form-data">
		<table class="minhaconta">
        	<tr>
            	<td valign="top">

                    Identificação: <br /><input type="text" name="identificacao" value="<?php echo $peneira['identificacao'] ?>" /><br /><br />
                    
                    Local: <br /><input type="text" name="local" value="<?php echo $peneira['local'] ?>" /><br /><br />
                    
                    Cep: <br /><input type="text" name="cep" value="<?php echo $peneira['cep'] ?>" /><br /><br />
                    
                    Cidade: <br /><input type="text" name="cidade" value="<?php echo $peneira['cidade'] ?>" /><br /><br />
                    
                    Estado: <br /><input type="text" name="estado" value="<?php echo $peneira['estado'] ?>" /><br /><br />
                    
                    Data: <br /><input type="text" name="data" value="<?php echo $peneira['data'] ?>" /><br /><br />
                    
                    Hora Inicial: <br /><input type="text" name="hora_inicial" value="<?php echo $peneira['hora_inicial'] ?>" /><br /><br />
                    
                    Número de Jogadores: <br /><input type="text" name="n_jogadores" value="<?php echo $peneira['n_jogadores'] ?>" /><br /><br />
                    
                    Duração: <br /><input type="text" name="duracao" value="<?php echo $peneira['duracao'] ?>" />hs<br /><br />

                </td>
            </tr>
            <tr>
            	<td align="center" style="padding-top:40px;">
                	<input type="submit" value="Cadastrar Peneira" />
                </td>
            </tr>
        </table>
        
    </form>
</div>
<?php
require_once("view/footer.php");

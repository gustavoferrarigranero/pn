<?php require_once("config.php"); ?>
<?php require_once("view/header.php"); ?>
<div id="center">
	<div class="left">
    	<div>Bem vindo(a) ao JOGA 10!</div>
        O melhor sistema de peneiras do futebol!<br />
        Cadastre-se e seja convocado para<br />
        as peneiras que vão acontecer em sua região.
    </div>
    <div class="right">
    	<div class="icone" onclick="redirect('novidades.php');"></div>
        <div class="icone" onclick="redirect('dicas.php');"></div>
        <div class="icone" onclick="redirect('quemsomos.php');"></div>
    </div>
</div>
<script type="text/javascript">
	function redirect(url){
		window.top.location = url;
		return false;	
	}
</script>
<?php require_once("view/footer.php"); ?>
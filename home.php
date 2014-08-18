<?php require_once("config.php"); ?>
<?php require_once("view/header.php"); ?>
<div id="center">
	<?php if($_SESSION['usuario']['tipo'] != 1){ ?>
        <div class="menu-title">Portal do Olheiro</div>
        <div class="menu">
            <a href="<?php URL; ?>cadastro-peneira.php">Cadastro de Peneira</a><br />
            <a href="<?php URL; ?>listar-peneiras.php">Visualizar Peneiras</a><br />
            <a href="<?php URL; ?>listar-jogadores.php">Visualizar Jogadores</a><br />
            <a href="<?php URL; ?>buscar-jogadores.php">Buscar Jogadores</a><br />
            <a href="<?php URL; ?>minha-conta.php">Alterar Conta</a><br />
            <a href="<?php URL; ?>logout.php">Sair</a><br />
        </div>
    <?php }else{ ?>
    	<div class="menu-title">Opções</div>
	<div class="menu">
        <a href="<?php URL; ?>minha-conta.php">Alterar Conta</a><br />
        <a href="<?php URL; ?>logout.php">Sair</a><br />
    </div>
    <?php } ?>
</div>
<script type="text/javascript">
	function redirect(url){
		window.top.location = url;
		return false;	
	}
</script>
<?php require_once("view/footer.php"); ?>
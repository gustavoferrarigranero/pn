<?php 
require_once("config.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){
	if(isset($_POST['login'])){
		require_once("controller/UsuarioController.php");
		$controller = new UsuarioController();
		$controller->verificaLogin($_POST);
	
		if(isset($_SESSION['sucesso'])){
			$_SESSION['usuario'] = $_SESSION['sucesso'] ;
			unset($_SESSION['sucesso']);
			header("Location: " . URL.'home.php');
			exit();
		}else{
			
			unset($_SESSION['sucesso']);
			unset($_SESSION['erro']);
			
			require_once("controller/OlheiroController.php");
			$controllerOlheiro = new OlheiroController();
			$controllerOlheiro->verificaLogin($_POST);
			
			if(isset($_SESSION['sucesso'])){
				$_SESSION['usuario'] = $_SESSION['sucesso'] ;
				unset($_SESSION['sucesso']);
				header("Location: " . URL.'home.php');
				exit();
			}
					
		}
	}
}
if(strpos($_SERVER['REQUEST_URI'],"index.php") || $_SERVER['REQUEST_URI'] == "/pn/"){
	if(isset($_SESSION['usuario']) && $_SESSION['usuario']){
		if($_SESSION['usuario']['tipo'] != 1){
		header("Location: " . URL.'home.php');
		exit();
		}
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Joga 10 - Peneiras</title>
<link rel="stylesheet" type="text/css" href="view/css/stylesheet.css"/>
<script type="text/javascript" src="view/js/jquery.js"></script>
<script type="text/javascript" src="view/js/jquery.maskedinput.js"></script>
<script type="text/javascript" src="view/js/jquery-ui-1.9.2.custom.min.js"></script>
</head>
<body>
<div class="bar">
	<?php if(!isset($_SESSION['usuario'])){ ?>
        <div class="login">
            <form action="" method="post">
            	<input type="hidden" name="login" value="1" />
                Login <input type="text" name="email" style="width:200px;"/> &nbsp; &nbsp; &nbsp; 
                Senha <input type="password" name="senha" /> &nbsp; &nbsp;
                <input type="submit" value="OK" />
            </form>
        </div>
        <div class="cad">
        	<a href="<?php echo URL ; ?>home.php">HOME</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <a href="<?php echo URL ; ?>cadastro.php">CADASTRE-SE</a>
        </div>
    <?php }else{ ?>
    	<div class="login">
        	 <a href="<?php echo URL ; ?>home.php" style="color:#FFF;">HOME</a>
        </div>
    	<div class="cad">
            Bem Vindo! <a href="<?php echo URL ; ?>minha-conta.php"><?php echo strtoupper($_SESSION['usuario']['nome']) ; ?></a>,  <a href="<?php echo URL ; ?>logout.php">Sair</a>
        </div>
    <?php } ?>
</div>
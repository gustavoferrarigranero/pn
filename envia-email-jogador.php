<?php


require_once("config.php");


require_once("controller/PeneiraController.php");
$controllerP = new PeneiraController();
$peneira = $controllerP->get($_POST['id_peneira'])->row ; 

require_once("controller/UsuarioController.php");
$controllerU = new UsuarioController();
$usuario = $controllerU->get($_POST['id_usuario'])->row ;

$html = "Parabéns ".$usuario['nome'].", você foi convidado para uma peneira, o local da peneira é: Endereço: ".$peneira['endereco'].",Bairro: ".$peneira['bairro'].", Cidade: ".$peneira['cidade'].", Estado: ".$peneira['estado'].", boa sorte!";


mail($usuario['email'],"Convite de Peneira - Joga 10!",$html);


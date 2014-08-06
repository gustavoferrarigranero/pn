<?php
require_once("conf.php");
if(!isset($_SESSION['usuario'])){
	header("Location: ". URL.'login.php');
	exit();
}

require_once("controller/ProdutoController.php");
$produtoC = new ProdutoController();

if($_SERVER['REQUEST_METHOD'] == "POST"){
	require_once("controller/DesejoController.php");
	$controller = new DesejoController();
	$controller->inserir($_POST);
}
if(isset($_GET['id']) && $_GET['id']){
	require_once("controller/DesejoController.php");
	$controller = new DesejoController();
	$controller->atende($_GET['id']);
}
require_once("view/header.php");
?>
<script type="text/javascript" src="view/javascript/jquery-ui/external/jquery/jquery.js"></script>
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
<div id="desejos">
    <table> 
        <tr>
            <td valign="top">
                <div class="ultimos-desejos">
                    <div class="titulo">Últimos Desejos</div>
                    <span>Veja os últimos desejos feitos por nossos usuários. </span><br /><br />
                    <?php
					
					if(!isset($controller)){
						require_once("controller/DesejoController.php");
						$controller = new DesejoController();
					}
                    
                    $desejos = $controller->listar(array('filter_status'=>1,'order'=>'DESC'));
                    
                    foreach($desejos->rows as $desejo){?>
                    	<div class="linha">
                            <strong>Desejo:</strong> 
                            <?php echo $produtoC->get($desejo['produto_id'])->row['descricao']  ; ?>
                            <strong> Nome: </strong><?php echo $desejo['nome'] ; ?>
                            <a href="<?php echo URL ?>desejos.php?id=<?php echo $desejo['id'] ; ?>"><span class="atender">Atender pedido</span></a>
                            <div><br /><strong>Descrição:</strong><br /><?php echo $desejo['descricao'] ; ?></div>
                            <div>
                                <?php
                                $prodI = $produtoC->get($desejo['produto_id'])->row['imagem'];
                                if($prodI){ ?>
                                    <img src="admin/app/webroot/imagens/<?php echo $prodI ; ?>" width="200" />
                                <?php } ?>
                            </div>
                        </div>
					<?php
                    }
                    ?>
                </div>
            </td>
            <td valign="top" style="padding-left:50px;">  
            	<div class="ultimos-desejos">
                    <div class="titulo">Cadastre seu Desejo</div>
                    <span>Use o formulario abaixo se você tem um desejo ou se conhece alguém que tem. </span><br /><br />
                    <form action="#" method="post">           
                        Tipo: <br />
                        <select name="produto_id">
                        	<option value="0">Selecione...</option>
                        	<?php
								foreach($produtoC->listar(array())->rows as $produtos){
							?>
                        	<option  imagem="<?php echo $produtos['imagem'] ?>" value="<?php echo $produtos['id'] ?>"><?php echo $produtos['descricao'] ?></option>
                            <?php
								}
							?>
                        </select>
                        <br />
                        <img src="#" style="display:none;" id="img" width="200" />
                        <script type="text/javascript">
						$("select").change(function() {

							$( "#img" ).css({'display':'nome'});
							var img = $("select option:selected" ).attr('imagem');

							if(img){
								$( "#img" ).attr('src','admin/app/webroot/imagens/'+img);
								$( "#img" ).css({'display':'inline'});
							}
						})
						</script>
                        <br /><br />
                        Descrição: <br /><textarea name="descricao" rows="10" cols="50"></textarea><br /><br />
                        <input type="hidden" name="status" value="1" />
                        <input type="hidden" name="usuario_id" value="<?php echo $_SESSION['usuario']['id'] ; ?>" />
                        <input type="submit" value="Cadastrar Desejo" />
                    </form>
                </div>
            </td>
        </tr>
    </table>
</div>
<?php
require_once("view/footer.php");

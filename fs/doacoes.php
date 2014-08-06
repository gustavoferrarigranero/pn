<?php
require_once("conf.php");
if(!isset($_SESSION['usuario'])){
	header("Location: ". URL.'login.php');
	exit();
}

require_once("controller/ProdutoController.php");
$produtoC = new ProdutoController();

if($_SERVER['REQUEST_METHOD'] == "POST"){
	require_once("controller/DoacaoController.php");
	$controller = new DoacaoController();
	$controller->inserir($_POST);
}
if(isset($_GET['id']) && $_GET['id']){
	require_once("controller/DoacaoController.php");
	$controller = new DoacaoController();
	$controller->atende($_GET['id']);
}
require_once("view/header.php");
?>
<script type="text/javascript" src="view/javascript/jquery-ui/external/jquery/jquery.js"></script>
<div id="doacoes">
	<?php
    if(isset($_SESSION['erro'])){
        ?>
        <div class="erro"><?php echo $_SESSION['erro'] ?></div>
        <?php
        unset($_SESSION['erro']);
    }
    if(isset($_SESSION['sucesso'])){
        ?>
        <div class="sucesso"><?php echo $_SESSION['sucesso'] ?></div><br /><br /><br /><br />
        <?php
		if($_POST['metodo'] != 1){
		?>		
        	<div style="width:100%;text-align:center;">
                <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                <form action="https://pagseguro.uol.com.br/checkout/v2/donation.html" method="post" target="new">
                    <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                    <input type="hidden" name="currency" value="BRL" />
                    <input type="hidden" name="receiverEmail" value="<?php echo EMAIL_PAGSEGURO ; ?>" />
                    <input type="image" src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/doacoes/120x53-doar.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                </form>
                <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
            </div>
            <br /><br /><br /><br />
        <?php
		}
        unset($_SESSION['sucesso']);
    }
    ?>
    <table> 
        <tr>
            <td valign="top">
                <div class="ultimas-doacoes">
                    <div class="titulo">Últimas Doacões</div>
                    <span>Veja as últimas doações feitas por nossos usuários. </span><br /><br />
                    <?php
					
					if(!isset($controller)){
						require_once("controller/DoacaoController.php");
						$controller = new DoacaoController();
					}
                    
                    $doacoes = $controller->listar(array('limit'=>5,'order'=>'DESC'));
                    
                    foreach($doacoes->rows as $doacao){?>
                    	<div class="linha">
                        	<strong>Doação:</strong> 
							<?php echo $produtoC->get($doacao['produto_id'])->row['descricao']  ; ?>
                            <strong> &nbsp; &nbsp; Nome: </strong><?php echo $doacao['nome'] ; ?><strong> &nbsp; &nbsp; Valor: </strong>R$ <?php echo number_format($doacao['valor'],2,',','.') ; ?>
                        	<div>
                                <?php
                                $prodI = $produtoC->get($doacao['produto_id'])->row['imagem'];
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
            	<div class="nova-doacao">
                    <div class="titulo">Faça uma Doação</div>
                    <span>Use o formulario abaixo para fazer uma doação, você recebera as informações no seu e-mail. </span><br /><br />
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
                        <br />
                        Valor: <br /><input type="text" name="valor" value="" /><br /><br />
                        Metodo de Doação: <br />
                        <select name="metodo">
                        	<option value="0">Selecione...</option>
                        	<option value="1">Entrar em contato por e-mail.</option>
                            <option value="2">Efetuar pagamento por Pagseguro</option>
                        </select>
                        <br /><br />
                        <input type="hidden" name="status" value="1" />
                        <input type="hidden" name="usuario_id" value="<?php echo $_SESSION['usuario']['id'] ; ?>" />
                        <input type="hidden" name="data" value="<?php echo date("Y-m-d") ; ?>" />
                        <input type="hidden" name="pagseguro" value="" />
                        <input type="submit" value="Doar" />
                    </form>
                </div>
            </td>
        </tr>
    </table>
</div>
<?php
require_once("view/footer.php");

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
        Escolha a Peneira desejada:<br />
        <select name="id_peneira">
            <option value="0">Selecione...</option>
            <?php foreach($peneiras as $peneira){ ?>
                <option value="<?php echo $peneira['id_peneira'] ; ?>"><?php echo $peneira['identificacao'] ; ?></option>
            <?php } ?>
        </select>
        <br /><br />
        Escolha o filtro para buscar jogares por proximidade:<br />
        <select name="filtro">
            <option value="0">Selecione...</option>
                <option value="endereco">Endereco</option>
                <option value="bairro">Bairro</option>
                <option value="cidade">Cidade</option>
                <option value="estado">Estado</option>
        </select>
        <br /><br />
        <input type="button" name="filtrar" value="Filtrar jogadores" />        
        <br /><br /><br />
        <div id="jogadores"></div>
        
</div>
<script type="text/javascript">
$(document).ready(function(e) {
    

	$("input[name=filtrar]").click(function(e) {
		filtroV = $("select[name=filtro] option:selected" ).val();
		id_peneiraV = $("select[name=id_peneira] option:selected" ).val()
		
		if(id_peneiraV == 0){
			alert("Selecione uma peneira criada para buscar!");
			return false;
		}
		
		if(filtroV == 0){
			alert("Selecione um filtro para buscar!");
			return false;
		}
		
        $.ajax({
			url: "buscar-jogadores-ajax.php",
			type: "POST",
			data: { id_peneira : id_peneiraV, filtro : filtroV },
			dataType: "html",
			success:function(data) {
                $('#jogadores').html(data);
            }
		});
    });
	
	$('.selecionar').live('click', function(){
		
		id_usuarioV = $(this).attr("id_usuario");
		id_peneiraV = $(this).attr("id_peneira");		
		

        $.ajax({
			url: "envia-email-jogador.php",
			type: "POST",
			data: { id_peneira : id_peneiraV, id_usuario : id_usuarioV },
			dataType: "html",
			success:function(data) {
                alert("Convidado com sucesso! Um e-mail foi enviado a este jogado!");
				return false;
            }
		});
		
		return false; 
		
    });
	
	
});
</script>
<?php
require_once("view/footer.php");
<?php include_once("../header.php"); ?>
<div id="content">
<?php include('lista_olheiros.php');?>
<?php include('lista_peneiras.php');?>
<?php include('lista_usuarios.php');?>
<?php include('olheiros.php');?>
<?php include('peneiras.php');?>
<?php include('usuarios.php');?>
</div>
<script>
	$(document).ready(function(){
        
		$(".menu_principal").click(function(){			
			var id_click = $(this).attr('id');			
			$(".box_home").slideUp("fast");			
			$("#box_"+id_click).slideDown("slow");			
			return false;
		});		
		
    });
</script>
<?php 
	include_once("../footer.php");
?>
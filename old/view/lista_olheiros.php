<?php

	include_once("../model/class.dao.php");
	include_once("../model/class.olheiros.php");
	include_once("../controller/class.olheiros.php");
	
	$olheiro = new Olheiro();
	
	$lista_de_olheiros = $olheiro->listarTodos();
?>

<div id="box_ListaOlheiros" class="box_home" style="display:none"> 
	<table border="1" width="400" align="center">
	<tr>
        <td>id_olheiro</td>
        <td>nome</td>
        <td>cpf</td>
        <td>telefone</td>
        <td>celular</td>        
        <td>endereco</td>
        <td>cidade</td>
        <td>estado</td>
        <td>numero</td>
        <td>entidade</td>               
        <td>email</td>
        <td>senha</td>
		<td>ACAO</td>
	</tr>
    
	<?php

		if (mysql_num_rows($lista_de_olheiros) <= 0) {
	?>
	<tr>
		<td colspan="4">Nenhum registro encontrado</td>
	</tr>
		<?php
            } else {
                
                while ($array_cat = mysql_fetch_assoc($lista_de_olheiros)) {
                
        ?>	
	<tr>
		<td>
            <a href="painel.php?id_olheiro=<?php echo $array_cat["id_olheiro"] ?>">
            
                <?php echo $array_cat["id_olheiro"] ?>
            </a>
        </td>
		<td>            
			<?php
				echo utf8_encode($array_cat["nome"])
			?>
		</td>
        <td>
                <?php
                echo utf8_encode($array_cat["cpf"])
                ?>
        </td>
        <td>
                <?php
                echo utf8_encode($array_cat["telefone"])
                ?>
        </td>
        <td>
                <?php
                echo utf8_encode($array_cat["celular"])
                ?>
        </td>
        
                <td>
                <?php
                echo utf8_encode($array_cat["endereco"])
                ?>
        </td>

        <td>
                <?php
                echo utf8_encode($array_cat["cidade"])
                ?>
        </td>
        <td>
                <?php
                echo utf8_encode($array_cat["estado"])
                ?>
        </td>
        
 		<td>
                <?php
                echo utf8_encode($array_cat["numero"])
                ?>
        </td> 
        
        <td>
                <?php
                echo utf8_encode($array_cat["entidade"])
                ?>
        </td>
              
        <td>
                <?php
                echo utf8_encode($array_cat["email"])
                ?>
        </td>
        <td>
                <?php
                echo utf8_encode($array_cat["senha"])
                ?>
        </td>

		<td>
			<a href="olheiros.php?acao=excluir&id_olheiro=<?php echo $array_cat["id_olheiro"] ?>">Excluir</a>
		</td>
	</tr>
	<?php
			}
		}
	?>
	</table>

</div>
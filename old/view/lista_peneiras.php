<?php

	include_once("../model/class.dao.php");
	include_once("../model/class.peneiras.php");
	include_once("../controller/class.peneiras.php");
	
	$peneira = new Peneira();
	
	$lista_de_peneiras = $peneira->listarTodos();
?>

<div id="box_ListaPeneiras" class="box_home" style="display:none">
	   
	<table border="1" width="400" align="center">
	<tr>
        <td>id_peneira</td>
        <td>identificacao</td>
        <td>local</td>
        <td>cep</td>
        <td>cidade</td>        
        <td>estado</td>
        <td>data</td>
        <td>hora_inicial</td>
        <td>n_jogadores</td>
        <td>duracao</td>               
        <td>n_atacante</td>
        <td>n_meio</td>
        <td>n_lateral_e</td>
        <td>n_lateral_d</td>
        <td>n_zagueiro</td>
        <td>n_goleiro</td>
		<td>ACAO</td>
	</tr>
    
	<?php

		if (mysql_num_rows($lista_de_peneiras) <= 0) {
	?>
	<tr>
		<td colspan="4">Nenhum registro encontrado</td>
	</tr>
		<?php
            } else {
                
                while ($array_cat = mysql_fetch_assoc($lista_de_peneiras)) {
                
        ?>	
	<tr>
		<td>
            <a href="painel.php?id_peneira=<?php echo $array_cat["id_peneira"] ?>">
            
                <?php echo $array_cat["id_peneira"] ?>
            </a>
        </td>
		<td>            
			<?php
				echo utf8_encode($array_cat["identificacao"])
			?>
		</td>
        <td>
                <?php
                echo utf8_encode($array_cat["local"])
                ?>
        </td>
        <td>
                <?php
                echo utf8_encode($array_cat["cep"])
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
                echo utf8_encode($array_cat["data"])
                ?>
        </td>
        <td>
                <?php
                echo utf8_encode($array_cat["hora_inicial"])
                ?>
        </td>
        
 		<td>
                <?php
                echo utf8_encode($array_cat["n_jogadores"])
                ?>
        </td> 
        
        <td>
                <?php
                echo utf8_encode($array_cat["duracao"])
                ?>
        </td>
              
        <td>
                <?php
                echo utf8_encode($array_cat["n_atacante"])
                ?>
        </td>
        <td>
                <?php
                echo utf8_encode($array_cat["n_meio"])
                ?>
        </td>
        <td>
                <?php
                echo utf8_encode($array_cat["n_lateral_e"])
                ?>
        </td>
        <td>
                <?php
                echo utf8_encode($array_cat["n_lateral_d"])
                ?>
        </td>
        <td>
                <?php
                echo utf8_encode($array_cat["n_zagueiro"])
                ?>
        </td>
        <td>
                <?php
                echo utf8_encode($array_cat["n_goleiro"])
                ?>
        </td>

		<td>
			<a href="peneiras.php?acao=excluir&id_peneira=<?php echo $array_cat["id_peneira"] ?>">Excluir</a>
		</td>
	</tr>
	<?php
			}
		}
	?>
	</table>

</div>
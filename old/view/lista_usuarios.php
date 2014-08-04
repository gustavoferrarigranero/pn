<?php

	include_once("../model/class.dao.php");
	include_once("../model/class.usuarios.php");
	include_once("../controller/class.usuarios.php");


	$usuario = new Usuario();
	


	$lista_de_usuarios = $usuario->listarTodos();
?>

<div id="box_ListaUsuarios" class="box_home" style="display:none">

	   
	<table border="1" width="400" align="center">
	<tr>
        <td>id_usuario</td>
        <td>nome</td>
        <td>cpf</td>
        <td>rg</td>
        <td>escolaridade</td>
        <td>telefone</td>
        <td>celular</td>
        <td>email</td>
        <td>senha</td>
        <td>endereco</td>
        <td>numero</td>
        <td>cidade</td>
        <td>estado</td>
        <td>nome_pai</td>
        <td>nome_mae</td>
        <td>naturalidade</td>
        <td>altura</td>
        <td>peso</td>
        <td>posicao</td>
        <td>pe_preferido</td>
        <td>caracteristicas</td>
        <td>historico</td>
		<td>ACAO</td>
	</tr>
	<?php
	
		if (mysql_num_rows($lista_de_usuarios) <= 0) {
	?>
	<tr>
		<td colspan="4">Nenhum registro encontrado</td>
	</tr>
	<?php
		} else {
			
			while ($array_cat = mysql_fetch_assoc($lista_de_usuarios)) {
			
	?>	
	<tr>
		<td>
            <a href="painel.php?id_usuario=<?php echo $array_cat["id_usuario"] ?>">
            
                <?php echo $array_cat["id_usuario"] ?>
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
                echo utf8_encode($array_cat["rg"])
                ?>
        </td>
        <td>
                <?php
                echo utf8_encode($array_cat["escolaridade"])
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
                echo utf8_encode($array_cat["email"])
                ?>
        </td>
        <td>
                <?php
                echo utf8_encode($array_cat["senha"])
                ?>
        </td>
        <td>
                <?php
                echo utf8_encode($array_cat["endereco"])
                ?>
        </td>
		<td>
                <?php
                echo utf8_encode($array_cat["numero"])
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
                echo utf8_encode($array_cat["nome_pai"])
                ?>
        </td>
        <td>
                <?php
                echo utf8_encode($array_cat["nome_mae"])
                ?>
        </td>
        <td>
                <?php
                echo utf8_encode($array_cat["naturalidade"])
                ?>
        </td>
        <td>
                <?php
                echo utf8_encode($array_cat["altura"])
                ?>
        </td>
        <td>
                <?php
                echo utf8_encode($array_cat["peso"])
                ?>
        </td>
        <td>
                <?php
                echo utf8_encode($array_cat["posicao"])
                ?>
        </td>
        <td>
                <?php
                echo utf8_encode($array_cat["pe_preferido"])
                ?>
        </td>
        <td>
                <?php
                echo utf8_encode($array_cat["caracteristicas"])
                ?>
        </td>
        <td>
                <?php
                echo utf8_encode($array_cat["historico"])
                ?>
        </td>

		<td>
			<a href="usuarios.php?acao=excluir&id_usuario=<?php echo $array_cat["id_usuario"] ?>">Excluir</a>
		</td>
	</tr>
	<?php
			}
		}
	?>
	</table>

</div>
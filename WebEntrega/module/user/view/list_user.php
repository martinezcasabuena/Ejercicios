<div id="contenido">
    <div class="container">
    	<div class="row">
    		<p><a href="index.php?page=controller_user&op=create"><img src="view/img/anadir.png"></a></p>
    		
    		<table cellpadding = "3">
                <?php
                    if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td align="center"  colspan="3">NO HAY NINGUN ANUNCIO</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) {
                            echo '<div bgcolor="blue">';
                            echo '<tr>';
                            echo '<td colspan="3"><img src="view/img/not-found.jpg" alt="" style="width:auto; height:auto;"></td>';
                            echo '</tr>';
                            echo '<tr bgcolor="Cadetblue">';
                            echo '<td colspan="3" align="center" height="35px">'. $row['titulo'] . '</td>';
                            echo '</tr>';
                            echo '<tr bgcolor="Cadetblue">';
                            echo '<td align="center" ><a class="Button_blue" href="index.php?page=controller_user&op=read&id='.$row['idAnuncio'].'">Read</a></td>';
                            echo '<td align="center" ><a class="Button_green" href="index.php?page=controller_user&op=update&id='.$row['idAnuncio'].'">Update</a></td>';
                            echo '<td align="center" ><a class="Button_red" href="index.php?page=controller_user&op=delete&id='.$row['idAnuncio'].'">Delete</a></td>';
                            echo '</tr>';
                            echo '</div>';
                        }
                    }
                ?>
            </table>
    	</div>
    </div>
</div>
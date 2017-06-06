<div id="contenido">
    <form autocomplete="on" method="post" name="aupdate_user" id="update_user" onsubmit="return validate();" action="index.php?page=controller_user&op=update">
        <h1>Modificar Anuncio</h1>
        <table border='0'>
            <tr>
                <td>Titulo Anuncio: </td>
                <td><input type="text" id="titulo" name="titulo" placeholder="Titulo Anuncio" value="<?php echo $anuncio['titulo'];?>" readonly/></td>
                <td><font color="red">
                    <span id="error_titulo" class="error">
                        <?php
                            echo $error['titulo']
                        ?>
                    </span>
                </font></font></td>
            </tr>
        
            <tr>
                <td>Provincia: </td>
                <td><input type="text" id="provincia" name="provincia" placeholder="Provincia" value="<?php echo $anuncio['provincia'];?>"/></td>
                <td><font color="red">
                    <span id="error_provincia" class="error">
                        <?php
                             echo $error['provincia']
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Ciudad: </td>
                <td><input type="text" id="ciudad" name="ciudad" placeholder="Ciudad" value="<?php echo $anuncio['ciudad'];?>"/></td>
                <td><font color="red">
                    <span id="error_ciudad" class="error">
                        <?php
                            echo $error['ciudad']
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Direccion: </td>
                <td><input type="text" id= "direccion" name="direccion" placeholder="Direccion" value="<?php echo $anuncio['direccion'];?>"/></td>
                <td><font color="red">
                    <span id="error_direccion" class="error">
                        <?php
                             echo $error['direccion']
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Metros: </td>
                <td><input type="text" id= "metros" name="metros" placeholder="Metros" value="<?php echo $anuncio['metros'];?>"/></td>
                <td><font color="red">
                    <span id="error_metros" class="error">
                        <?php
                             echo $error['metros']
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Habitaciones: </td>
                <td><input type="text" id="habitaciones" name="habitaciones" placeholder="Habitaciones" value="<?php echo $anuncio['habitaciones'];?>"/></td>
                <td><font color="red">
                    <span id="error_habitaciones" class="error">
                        <?php
                             echo $error['habitaciones']
                        ?>
                    </span>
                </font></font></td>
                
            </tr>

            <tr>
                <td>Baños: </td>
                <td><input type="text" id="banyos" name="banyos" placeholder="Baños" value="<?php echo $anuncio['banyos'];?>"/></td>
                <td><font color="red">
                    <span id="error_banyos" class="error">
                        <?php
                             echo $error['banyos']
                        ?>
                    </span>
                </font></font></td>
                
            </tr>

             <tr>
                <td>Renta: </td>
                <td>
                    <?php
                        if ($anuncio['renta']==="alquiler"){
                    ?>
                        <input type="radio" id="renta" name="renta" placeholder="Renta" value="alquiler" checked/>Alquiler
                        <input type="radio" id="renta" name="renta" placeholder="Renta" value="venta"/>Venta
                    <?php    
                        }else{
                    ?>
                        <input type="radio" id="renta" name="renta" placeholder="Renta" value="alquiler"/>Alquiler
                        <input type="radio" id="renta" name="renta" placeholder="Renta" value="venta" checked/>Venta
                    <?php   
                        }
                    ?>
                </td>
                <td><font color="red">
                    <span id="error_renta" class="error">
                        <?php
                         echo $error['renta']
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Tipo: </td>
                <td><select id="tipo" name="tipo" placeholder="Tipo">
                    <?php
                        if($anuncio['tipo']==="piso"){
                    ?>
                        <option value="piso" selected>Piso</option>
                        <option value="chalet">Chalet</option>
                        <option value="casa">Casa</option>
                    <?php
                        }elseif($anuncio['tipo']==="chalet"){
                    ?>
                        <option value="piso">Piso</option>
                        <option value="chalet" selected>Chalet</option>
                        <option value="casa">Casa</option>
                    <?php
                        }else{
                    ?>
                        <option value="piso">Piso</option>
                        <option value="chalet">Chalet</option>
                        <option value="casa" selected>Casa</option>
                    <?php
                        }
                    ?>
                    </select></td>
                <td><font color="red">
                    <span id="error_tipo" class="error">
                        <?php
                         echo $error['tipo']
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>Precio: </td>
                <td><input type="text" id="precio" name="precio" placeholder="Precio" value="<?php echo $anuncio['precio'];?>"/></td>
                <td><font color="red">
                    <span id="error_precio" class="error">
                        <?php
                             echo $error['precio']
                        ?>
                    </span>
                </font></font></td>
                
            </tr>
            
            <tr>
                <td>Fecha de construccion: </td>
                <td><input id="fecha" type="text" name="fechaConstruccion" placeholder="Fecha de construccion" value="<?php echo $anuncio['fechaConstruccion'];?>"/></td>
                <td><font color="red">
                    <span id="error_fechaConstruccion" class="error">
                        <?php
                         echo $error['fechaConstruccion']
                        ?>
                    </span>
                </font></font></td>
            </tr>
         <!--   <tr>
                <td>Observaciones: </td>
                <td><textarea cols="30" rows="5" id="observaciones" name="observaciones" placeholder="observaciones"><?php echo $anuncio['comment'];?></textarea></td>
                <td><font color="red">
                    <span id="error_observaciones" class="error">
                        <?php
                            echo $error['observaciones']
                        ?>
                    </span>
                </font></font></td>
            </tr>
          -->  
         <!--   <tr>
                <td>Aficiones: </td>
                <?php
                    $afi=explode(":", $anuncio['hobby']);
                ?>
                <td>
                    <?php
                        $busca_array=in_array("Informatica", $afi);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "aficion[]" name="aficion[]" value="Informatica" checked/>informatica
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" id= "aficion[]" name="aficion[]" value="Informatica"/>informatica
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("Alimentacion", $afi);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "aficion[]" name="aficion[]" value="Alimentacion" checked/>alimentacion
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" id= "aficion[]" name="aficion[]" value="Alimentacion"/>alimentacion
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("Automovil", $afi);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "aficion[]" name="aficion[]" value="Automovil" checked/>automovil</td>
                    <?php
                        }else{
                    ?>
                    <input type="checkbox" id= "aficion[]" name="aficion[]" value="Automovil"/>automovil</td>
                    <?php
                        }
                    ?>
                </td>
                <td><font color="red">
                    <span id="error_aficion" class="error">
                        <?php
                            echo $error['aficion']
                        ?>
                    </span>
                </font></font></td>
            </tr>
            -->
            <tr>
                <td><input type="submit" name="update" id="update"/></td>
                <td align="right"><a href="index.php?page=controller_user&op=list">Volver</a></td>
            </tr>
        </table>
    </form>
</div>
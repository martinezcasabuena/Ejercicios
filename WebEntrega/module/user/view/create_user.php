<div id="contenido">
    <form autocomplete="on" method="post" name="alta_user" id="alta_user" onsubmit="return validate();" action="index.php?page=controller_user&op=create">
        <h1>Anuncio nuevo</h1>
        <table border='0'>
            <tr>
                <td>Titulo Anuncio: </td>
                <td><input type="text" id="titulo" name="titulo" placeholder="Titulo Anuncio" value=""/></td>
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
                <td><input type="text" id="provincia" name="provincia" placeholder="Provincia" value=""/></td>
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
                <td><input type="text" id="ciudad" name="ciudad" placeholder="Ciudad" value=""/></td>
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
                <td><input type="text" id= "direccion" name="direccion" placeholder="Direccion" value=""/></td>
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
                <td><input type="text" id= "metros" name="metros" placeholder="Metros" value=""/></td>
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
                <td><input type="text" id="habitaciones" name="habitaciones" placeholder="Habitaciones" value=""/></td>
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
                <td><input type="text" id="banyos" name="banyos" placeholder="Baños" value=""/></td>
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
                <td><input type="radio" id="renta" name="renta" placeholder="Renta" value="alquiler"/>Alquiler
                    <input type="radio" id="renta" name="renta" placeholder="Renta" value="venta"/>Venta</td>
                <td><font color="red">
                    <span id="error_renta" class="error">
                        <?php
                          //echo $error['renta']
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Tipo: </td>
                <td><select id="tipo" name="tipo" placeholder="Tipo de vivienda">
                    <option value="piso">Piso</option>
                    <option value="chalet">Chalet</option>
                    <option value="casa">Casa</option>
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
                <td><input type="text" id="precio" name="precio" placeholder="Precio" value=""/></td>
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
                <td><input id="fecha" type="text" name="fechaConstruccion" placeholder="Fecha de construccion" value=""/></td>
                <td><font color="red">
                    <span id="error_fechaConstruccion" class="error">
                        <?php
                         echo $error['fechaConstruccion']
                        ?>
                    </span>
                </font></font></td>
            </tr>



            <tr>
                <td>Otra informacion: </td>
                <td><input type="checkbox" id= "informacion[]" name="informacion[]" placeholder= "informacion" value="reforma"/>Reforma reciente
                    <input type="checkbox" id= "informacion[]" name="informacion[]" placeholder= "informacion" value="garaje"/>Garaje
                    <input type="checkbox" id= "informacion[]" name="informacion[]" placeholder= "informacion" value="terraza"/>Terraza
                    <input type="checkbox" id= "informacion[]" name="informacion[]" placeholder= "informacion" value="patio"/>Patio
                    </td>
                    <td><font color="red">
                    <span id="error_informacion" class="error">
                        <?php
                         echo $error['informacion']
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
          <!--  <tr>
                <td>Observaciones: </td>
                <td><textarea cols="30" rows="5" id="observaciones" name="observaciones" placeholder="observaciones" value=""></textarea></td>
                <td><font color="red">
                    <span id="error_observaciones" class="error">
                        <?php
                         echo $error['observaciones']
                        ?>
                    </span>
                </font></font></td>
            </tr>
        -->
            
            <tr>
                <td><input type="submit" name="create" id="create"/></td>
                <td align="right"><a href="index.php?page=controller_user&op=list">Volver</a></td>
            </tr>
        </table>
    </form>
</div>
<div id="contenido">
    <h1>Informacion del Anuncio</h1>
    <p>
    <table border='2'>
        <tr>
            <td>idAnuncio: </td>
            <td>
                <?php
                    echo $anuncio['idAnuncio'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Fecha publicación anuncio: </td>
            <td>
                <?php
                    echo $anuncio['fechaPublicacion'];
                ?>
            </td>
        </tr>
    
        <tr>
            <td>Titulo Anuncio: </td>
            <td>
                <?php
                    echo $anuncio['titulo'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Provincia: </td>
            <td>
                <?php
                    echo $anuncio['provincia'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Ciudad: </td>
            <td>
                <?php
                    echo $anuncio['ciudad'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Direccion: </td>
            <td>
                <?php
                    echo $anuncio['direccion'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Metros: </td>
            <td>
                <?php
                    echo $anuncio['metros'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Habitaciones: </td>
            <td>
                <?php
                    echo $anuncio['habitaciones'];
                ?>
            </td>
            
        </tr>
        
        <tr>
            <td>Baños: </td>
            <td>
                <?php
                    echo $anuncio['banyos'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Renta: </td>
            <td>
                <?php
                    echo $anuncio['renta'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Tipo: </td>
            <td>
                <?php
                    echo $anuncio['tipo'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Fecha construcción: </td>
            <td>
                <?php
                    echo $anuncio['fechaConstruccion'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Precio: </td>
            <td>
                <?php
                    echo $anuncio['precio'];
                ?>
            </td>
        </tr>
    </table>
    </p>
    <p><a href="index.php?page=controller_user&op=list">Volver</a></p>
</div>
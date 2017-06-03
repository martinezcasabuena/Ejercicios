<div id="contenido">
    <h1>Informacion del Anuncio</h1>
    <p>
    <table border='2'>
        <tr>
            <td>idAnuncio: </td>
            <td>
                <?php
                    echo $user['idAnuncio'];
                ?>
            </td>
        </tr>
    
        <tr>
            <td>Titulo Anuncio: </td>
            <td>
                <?php
                    echo $user['titulo'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Provincia: </td>
            <td>
                <?php
                    echo $user['provincia'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Ciudad: </td>
            <td>
                <?php
                    echo $user['ciudad'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Direccion: </td>
            <td>
                <?php
                    echo $user['direccion'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Metros: </td>
            <td>
                <?php
                    echo $user['metros'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Habitaciones: </td>
            <td>
                <?php
                    echo $user['habitaciones'];
                ?>
            </td>
            
        </tr>
        
        <tr>
            <td>Baños: </td>
            <td>
                <?php
                    echo $user['banyos'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Renta: </td>
            <td>
                <?php
                    echo $user['renta'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Tipo: </td>
            <td>
                <?php
                    echo $user['tipo'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Precio: </td>
            <td>
                <?php
                    echo $user['precio'];
                ?>
            </td>
        </tr>
    </table>
    </p>
    <p><a href="index.php?page=controller_user&op=list">Volver</a></p>
</div>
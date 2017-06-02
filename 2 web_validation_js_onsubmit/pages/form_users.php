<form method="post" name="formusers" id="formusers" onsubmit="return validate_user();" action="index.php?page=controller_users">
		<?php
		if(isset($error)){
			print ("<BR><span CLASS='styerror'>" . "* ".$error . "</span><br/>");
		}?>

		<p>
			<label for="tituloAnuncio">Titulo anuncio</label>
			<input name="tituloAnuncio" id="tituloAnuncio" type="text" placeholder="Titulo anuncio" value="<?php echo $_POST?$_POST['tituloAnuncio']:""; ?>" />
			<span id="e_tituloAnuncio" class="styerror"></span>
		</p>
        <p>
			<label for="calle">Calle</label>
			<input name="calle" id="calle" type="text" placeholder="Calle" value="<?php echo $_POST?$_POST['calle']:""; ?>" />
			<span id="e_calle" class="styerror"></span>
		</p>
        <p>
			<label for="metros">m2</label>
			<input name="metros" id="metros" type="text" placeholder="m2" value="<?php echo $_POST?$_POST['metros']:""; ?>" />
			<span id="e_metros" class="styerror"></span>
		</p>
        <p>
			<label for="banyos">Nº baños</label>
			<input name="banyos" id="banyos" type="text" placeholder="Nº baños" value="<?php echo $_POST?$_POST['banyos']:""; ?>" />
			<span id="e_banyos" class="styerror"></span>
		</p>

		<p>
			<label for="habitaciones">Nº Habitaciones</label>
			<input name="habitaciones" id="habitaciones" type="text" placeholder="habitaciones" value="<?php echo $_POST?$_POST['habitaciones']:""; ?>" />
			<span id="e_habitaciones" class="styerror"></span>
		</p>

        <p>
			<label for="precio">Precio</label>
			<input name="precio" id="precio" type="text" placeholder="Precio" value="<?php echo $_POST?$_POST['precio']:""; ?>" />
			<span id="e_precio" class="styerror"></span>
		</p>
		<p>
			<label for="fechaPiso">Fecha del piso</label>
			<input id="fechaPiso" type="text" name="fechaPiso" readonly="readonly">
			<span id="e_fechaPiso" class="styerror"></span>
		</p>
		<input name="Submit" type="submit" value="Registrar"/>
	</form>
	
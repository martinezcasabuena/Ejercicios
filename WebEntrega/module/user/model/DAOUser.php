<?php
    include("model/connect.php");
    
	class DAOUser{
		function insert_user($datos){
			$titulo=$datos['titulo'];
        	$provincia=$datos['provincia'];
        	$ciudad=$datos['ciudad'];
        	$direccion=$datos['direccion'];
        	$metros=$datos['metros'];
        	$habitaciones=$datos['habitaciones'];
        	$banyos=$datos['banyos'];
            $renta=$datos['renta'];
        	$precio=$datos['precio'];
            $tipo=$datos['tipo'];
            $fechaConstruccion=$datos['fechaConstruccion'];
            $informacion=$datos['informacion'];



        	$sql = " INSERT INTO anuncios (titulo, provincia, ciudad, direccion, metros, habitaciones, banyos, renta, tipo,precio,fechaConstruccion,fechaPublicacion)"
        		. " VALUES ('$titulo', '$provincia', '$ciudad', '$direccion', '$metros', '$habitaciones', '$banyos', '$renta', '$tipo', '$precio','$fechaConstruccion',now())";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function select_all_user(){
			$sql = "SELECT * FROM anuncios ORDER BY idAnuncio ASC";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}
		
		function select_user($idAnuncio){
			$sql = "SELECT * FROM anuncios WHERE idAnuncio='$idAnuncio'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}
		
		function update_user($datos){
            $titulo=$datos['titulo'];
            $provincia=$datos['provincia'];
            $ciudad=$datos['ciudad'];
            $direccion=$datos['direccion'];
            $metros=$datos['metros'];
            $habitaciones=$datos['habitaciones'];
            $banyos=$datos['banyos'];
            $renta=$datos['renta'];
            $precio=$datos['precio'];
            $tipo=$datos['tipo'];
            $fechaConstruccion=$datos['fechaConstruccion'];

        	
        	$sql = " UPDATE anuncios SET titulo='$titulo', provincia='$provincia', ciudad='$ciudad', direccion='$direccion', metros='$metros', habitaciones='$habitaciones', banyos='$banyos',"
        		. " renta='$renta', precio='$precio', tipo='$tipo', fechaConstruccion='$fechaConstruccion' WHERE titulo='$titulo'";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function delete_user($idAnuncio){
			$sql = "DELETE FROM anuncios WHERE idAnuncio='$idAnuncio'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}
	}
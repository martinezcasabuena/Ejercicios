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


        	$sql = " INSERT INTO anuncios (titulo, provincia, ciudad, direccion, metros, habitaciones, banyos, renta, tipo,precio)"
        		. " VALUES ('$titulo', '$provincia', '$ciudad', '$direccion', '$metros', '$habitaciones', '$banyos', '$renta', '$tipo', '$precio')";
            
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
		
		function select_user($user){
			$sql = "SELECT * FROM anuncios WHERE idAnuncio='$user'";
			
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
        	
        	$sql = " UPDATE anuncios SET titulo='$titulo', provincia='$provincia', ciudad='$ciudad', direccion='$direccion', metros='$metros', habitaciones='$habitaciones', banyos='$banyos',"
        		. " renta='$renta', precio='$precio', tipo='$tipo' WHERE titulo='$titulo'";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function delete_user($user){
			$sql = "DELETE FROM anuncios WHERE idAnuncio='$user'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}
	}
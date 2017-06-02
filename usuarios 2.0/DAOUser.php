<?php
    include ("connect.php");
    
	class DAOUser{
		function nuevo_user($user){
			 $sql = "INSERT INTO usuarios(usuario, nombre, apellidos, email,password,date_birthday,fecha)"
                . " VALUES ('$user[usuario]', '$user[nombre]', '$user[apellidos]','$user[email]','$user[password]','$user[date_birthday]',now())";
            


            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
	}



	/*

	INSERT INTO usuarios(usuario, nombre, apellidos, email,password,date_birthday,fecha)VALUES ('', '', '','','','','25-2-2015')
	*/

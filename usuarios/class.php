<?php
	class Conectar{
		public static function con(){
			$host = getenv('127.0.0.1');  
    		$user = "root";                     //Your Cloud 9 username
    		//$user = getenv('C9_USER');
    		$pass = "";                             //Remember, there is NO password!
    		$db = "usuarios";                      //Your database name you want to connect to
    		$port = 3306;                           //The port #. It is always 3306
    		$tabla="usuarios";
    		
    		$conexion = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
			return $conexion;
		}
		public static function close($conexion){
			mysqli_close($conexion);
		}
	}
	class Usuarios{
		function nuevo_usuario($nombre,$contrasenya,$email,$asunto,$mensaje){
			 $sql = "INSERT INTO usuarios(nombre,contrasenya, email, asunto, mensaje,"
                . " hora, fecha) VALUES ('$nombre',$contrasenya, '$email', '$asunto',"
                . " '$mensaje', now(), now())";
            
            $conexion = Conectar::con();
            $res = mysqli_query($conexion, $sql);
            Conectar::close($conexion);
			return $res;
		}
		function list_fetch_assoc_usuario(){
			$cad="";
			$sql = "select * from usuarios";
                
			$conexion = Conectar::con();
			
			$result = mysqli_query($conexion, $sql);
			while ($row = mysqli_fetch_assoc($result)) {
        		$cad .= "Nombre: " . $row['nombre'] . "<br>";
        		$cad .= " Contrasenya: " . $row['contrasenya']. "<br>";
        		$cad .= " Email: " . $row['email']. "<br>";
        		$cad .= "Asunto: " . $row['asunto'] . "<br>";
        		$cad .= " Msje: " . $row['mensaje']. "<br>";
    		}
    	
            Conectar::close($conexion);
			return $cad;
		}
	}
?>

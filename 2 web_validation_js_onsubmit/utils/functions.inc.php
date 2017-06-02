<?php
	function validate_user(){
		$error='';
		$filtro = array(
			'tituloAnuncio' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^\D{3,30}$/')
			),
			
			'calle' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^\D{3,30}$/')
			),
			
			'metros' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^\d{0,10}$/')
			),
			
			'banyos' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^\d{0,10}$/')
			),
			
			'habitaciones' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^\d{0,10}$/')
			),
			
			'precio' => array(
				'filter' => FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^\d{0,10}$/')
			)
		);
		
		$resultado=filter_input_array(INPUT_POST,$filtro);
		if(!$resultado['tituloAnuncio']){
			$error='El titulo del anuncio debe tener de 4 a 20 caracteres';
		}elseif(!$resultado['calle']){
			$error='calle debe tener de 3 a 30 caracteres';
		}elseif(!$resultado['metros']){
			$error='metros debe ser un numero';
		}elseif(!$resultado['banyos']){
			$error='banyos debe ser un numero';
		}elseif(!$resultado['habitaciones']){
			$error='habitaciones debe ser un numero';
		}elseif(!$resultado['precio']){
			$error='precio debe ser un numero';
		}else{
			 return $return=array('resultado'=>true,'error'=>$error,'datos'=>$resultado);
		};
		return $return=array('resultado'=>false , 'error'=>$error,'datos'=>$resultado);
	};

	
	function debug($array){
		echo "<pre>";
		print_r($array);
		echo "</pre><br>";
	}
?>

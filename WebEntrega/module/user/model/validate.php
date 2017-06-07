<?php
    function validate_titulo($texto){
        if(!isset($texto) || empty($texto)){
            return false;
        }else{
            $reg="|^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$|";
            return preg_match($reg,$texto);
        }
    }
    
    function validate_provincia($texto){
        if(!isset($texto) || empty($texto)){
            return false;
        }else{
            $reg="|^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$|";
            return preg_match($reg,$texto);
        }
    }
    
    function validate_ciudad($texto){
        if(!isset($texto) || empty($texto)){
            return false;
        }else{
            $reg="|^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$|";
            return preg_match($reg,$texto);
        }
    }
    
    function validate_direccion($texto){
        if(!isset($texto) || empty($texto)){
            return false;
        }else{
            $reg="|^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$|";
            return preg_match($reg,$texto);
        }
    }
    
    function validate_metros($texto){
        $reg="/[0-9]{1,2}$/";
        return preg_match($reg,$texto);
    }
    
    function validate_habitaciones($texto){
        $reg="/[0-9]{1,2}$/";
        return preg_match($reg,$texto);
    }
    
    function validate_banyos($texto){
        $reg="/[0-9]{1,2}$/";
        return preg_match($reg,$texto);
    }
    
    function validate_renta($texto){
        if(!isset($texto) || empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    
    function validate_tipo($texto){
        if(!isset($texto) || empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    
   /* function validate_observaciones($texto){
        if(empty($texto)){
            return false;
        }else{
            return true;
        }
    }*/
    
    function validate_precio($texto){
        $reg="/[0-9]{1,6}$/";
        return preg_match($reg,$texto);
    }

    function validate_fechaConstruccion($texto){
        if(empty($texto)){
            return false;
        }else{
            return true;
        }
    }

    function validate_informacion($texto){
        if(!isset($texto) || empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    
    function validate(){
        $check=true;

        $error=array();
        
        $v_titulo=$_POST['titulo'];
        $v_provincia=$_POST['provincia'];
        $v_ciudad=$_POST['ciudad'];
        $v_direccion=$_POST['direccion'];
        $v_metros=$_POST['metros'];
        $v_habitaciones=$_POST['habitaciones'];
        $v_banyos=$_POST['banyos'];
        $v_tipo=$_POST['tipo'];
        //$v_renta=$_POST['renta'];
        //$v_observaciones=$_POST['observaciones'];
        $v_precio=$_POST['precio'];
        $v_fechaConstruccion=$_POST['fechaConstruccion'];
        $v_informacion=$_POST['informacion'];

        
        $r_titulo=validate_titulo($v_titulo);
        $r_provincia=validate_provincia($v_provincia);
        $r_ciudad=validate_ciudad($v_ciudad);
        $r_direccion=validate_direccion($v_direccion);
        $r_metros=validate_metros($v_metros);
        $r_habitaciones=validate_habitaciones($v_habitaciones);
        $r_banyos=validate_banyos($v_banyos);
        $r_tipo=validate_tipo($v_tipo);
        //$r_renta=validate_renta($v_renta);
       // $r_observaciones=validate_observaciones($v_observaciones);
        $r_precio=validate_precio($v_precio);
        $r_fechaConstruccion=validate_fechaConstruccion($v_fechaConstruccion);
        $r_informacion=validate_informacion($v_informacion);

        
        if($r_titulo !== 1){
            $error_titulo = " * El titulo introducido no es valido";
            $check=false;
        }else{
            $error_titulo = "";
        }
        if($r_provincia !== 1){
            $error_provincia = " * La provincia introducida no es valida";
            $check=false;
        }else{
            $error_provincia = "";
        }
        if($r_ciudad !== 1){
            $error_ciudad = " * La ciudad introducida no es valida";
            $check=false;
        }else{
            $error_ciudad = "";
        }
        if($r_direccion !== 1){
            $error_direccion = " * La direccion introducida no es valida";
            $check=false;
        }else{
            $error_direccion = "";
        }
        if(!$r_metros){
            $error_metros = " * Los metros introducidos no son validos";
            $check=false;
        }else{
            $error_metros = "";
        }
        if(!$r_habitaciones){
            $error_habitaciones = " * El numero de habitaciones introducido no es valido";
            $check=false;
        }else{
            $error_habitaciones = "";
        }
        if($r_banyos !== 1){
            $error_banyos = " * El numero de baños introducido no es valido";
            $check=false;
        }else{
            $error_banyos = "";
        }
        /*if(!$r_renta){
            $error_renta = " * No has seleccionado ningun tipo de renta";
            $check=false;
        }else{
            $error_renta = "";
        }*/
        if(!$r_tipo){
            $error_tipo = " * No has seleccionado ningun tipo";
            $check=false;
        }else{
            $error_tipo = "";
        }
       /* if(!$r_observaciones){
            $error_observaciones = " * El texto introducido no es valido";
            $check=false;
        }else{
            $error_observaciones = "";
        }*/
        if(!$r_precio){
            $error_precio = " * El precio introducido no es valido";
            $check=false;
        }else{
            $error_precio = "";
        }
        if(!$r_fechaConstruccion){
            $error_fechaConstruccion = " * No has introducido ninguna fecha";
            $check=false;
        }else{
            $error_fechaConstruccion = "";
        }
        if(!$r_informacion){
            $error_informacion = " * La informacion introducida no es valida";
            $check=false;
        }else{
            $error_informacion = "";
        }
        $error = array(
                            'titulo' => $error_titulo,
                            'ciudad' => $error_ciudad,
                            'direccion' => $error_direccion,
                            'metros' => $error_metros,
                            'provincia' => $error_provincia,
                            'banyos' => $error_banyos,
                            'tipo' => $error_tipo,
                            //'renta' => $error_renta,
                            //'observaciones' => $error_observaciones,
                            'precio' => $error_precio,
                            'habitaciones' => $error_habitaciones,
                            'fechaConstruccion' => $error_fechaConstruccion,
                            'informacion' => $error_informacion
                        );
        $resultado=array('resultado'=>$check , 'error'=>$error);
        return $resultado;

        //return $check;
    }
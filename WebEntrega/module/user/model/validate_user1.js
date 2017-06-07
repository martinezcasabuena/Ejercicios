
function validate_titulo(texto){
    if (texto.length > 0){
        var reg=/^[a-zA-Z]*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_provincia(texto){
    if (texto.length > 0){
        var reg=/^[a-zA-Z]*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_ciudad(texto){
    if (texto.length > 0){
        var reg=/^[a-zA-Z]*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_direccion(texto){
    if (texto.length > 0){
        var reg=/^[a-zA-Z]*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_metros(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}

function validate_habitaciones(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}

function validate_banyos(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}

function validate_renta(texto){
    var i;
    var ok=0;
    for(i=0; i<texto.length;i++){
        if(texto[i].checked){
            ok=1
        }
    }
 
    if(ok==1){
        return true;
    }
    if(ok==0){
        return false;
    }
}

function validate_tipo(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}

function validate_precio(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}

function validate_fechaConstruccion(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}

function validate(){
    var check=true
    
    var v_titulo=document.getElementById('titulo').value;
    var v_provincia=document.getElementById('provincia').value;
    var v_ciudad=document.getElementById('ciudad').value;
    var v_direccion=document.getElementById('direccion').value;
    var v_metros=document.getElementById('metros').value;
    var v_habitaciones=document.getElementById('habitaciones').value;
    var v_banyos=document.getElementById('banyos').value;
    var v_renta=document.getElementsByName('renta');
    var v_tipo=document.getElementById('tipo');
    var v_precio=document.getElementById('precio').value;
    //var v_fechaConstruccion=document.getElementById('fechaConstruccion').value;

    
    var r_titulo=validate_titulo(v_titulo);
    var r_provincia=validate_provincia(v_provincia);
    var r_ciudad=validate_ciudad(v_ciudad);
    var r_direccion=validate_ciudad(v_direccion);
    var r_metros=validate_metros(v_metros);
    var r_habitaciones=validate_habitaciones(v_habitaciones);
    var r_banyos=validate_banyos(v_banyos);
    var r_renta=validate_renta(v_renta);
    var r_tipo=validate_tipo(v_tipo);
    var r_precio=validate_precio(v_precio);
    //var r_fechaConstruccion=validate_fechaConstruccion(v_fechaConstruccion);



    if(!r_titulo){
        document.getElementById('error_titulo').innerHTML = " * El titulo introducido no es valido 1";
        check=false;
    }else{
        document.getElementById('error_titulo').innerHTML = "";
    }
     if(!r_provincia){
        document.getElementById('error_provincia').innerHTML = " * La provincia introducida no es valida 2";
        check=false;
    }else{
        document.getElementById('error_provincia').innerHTML = "";
    }
    if(!r_ciudad){
        document.getElementById('error_ciudad').innerHTML = " * La ciudad introducida no es valida 3";
        check=false;
    }else{
        document.getElementById('error_ciudad').innerHTML = "";
    }
    if(!r_direccion){
        document.getElementById('error_direccion').innerHTML = " * La direccion introducida no es valida 4";
        check=false;
    }else{
        document.getElementById('error_direccion').innerHTML = "";
    }
    if(!r_metros){
        document.getElementById('error_metros').innerHTML = " * Los metros introducios no son validos 5";
        check=false;
    }else{
        document.getElementById('error_metros').innerHTML = "";
    }
    if(!r_habitaciones){
        document.getElementById('error_habitaciones').innerHTML = " * El numero de habitaciones introducido no es valido 6";
        check=false;
    }else{
        document.getElementById('error_habitaciones').innerHTML = "";
    }
    if(!r_banyos){
        document.getElementById('error_banyos').innerHTML = " * El numero de baños introducido no es valido 7";
        check=false;
    }else{
        document.getElementById('error_banyos').innerHTML = "";
    }
    if(!r_renta){
        document.getElementById('error_renta').innerHTML = " * No has seleccionado ningun renta 8";
        check=false;
    }else{
        document.getElementById('error_renta').innerHTML = "";
    }
    if(!r_precio){
        document.getElementById('error_precio').innerHTML = " * El precio introducido no es valido 9";
        check=false;
    }else{
        document.getElementById('error_precio').innerHTML = "";
    }
   /* if(!r_fechaConstruccion){
        document.getElementById('error_fechaConstruccion').innerHTML = " * No has introducido ninguna fecha 10";
        check=false;
    }else{
        document.getElementById('error_fechaConstruccion').innerHTML = "";
    }
    */


    return check;
}
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

function validate_direccion(direccion){
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

function validate_pais(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}

function validate_renta(array){
    if (texto.length > 0){
        return true;
    }
    return false;
    }
    return check;
}

function validate_tipo(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}

function validate_precio(array){
    if (texto.length > 0){
        return true;
    }
    return false;
}

function validate(){
    var check=true
    
    var v_h=document.getElementById('titulo').value;
    var v_provincia=document.getElementById('pass').value;
    var v_ciudad=document.getElementById('ciudad').value;
    var v_direccion=document.getElementById('direccion').value;
    var v_metros=document.getElementsByName('metros');
    var v_habitaciones=document.getElementById('habitaciones').value;
    var v_banyos=document.getElementById('banyos').value;
    var v_renta=document.getElementById('renta[]');
    var v_tipo=document.getElementById('tipo').value;
    var v_precio=document.getElementsByName('precio[]');
    
    var r_titulo=validate_titulo(v_titulo);
    var r_provincia=validate_provincia(v_provincia);
    var r_ciudad=validate_ciudad(v_ciudad);
    var r_direccion=validate_direccion(v_direccion);
    var r_metros=validate_metros(v_metros);
    var r_habitaciones=validate_habitaciones(v_habitaciones);
    var r_banyos=validate_banyos(v_banyos);
    var r_renta=validate_renta(v_renta);
    var r_tipo=validate_tipo(v_tipo);
    var r_precio=validate_precio(v_precio);
    
    if(!r_titulo){
        document.getElementById('error_titulo').innerHTML = " * El titulo introducido no es valido";
        check=false;
    }else{
        document.getElementById('error_titulo').innerHTML = "";
    }
    if(!r_provincia){
        document.getElementById('error_provincia').innerHTML = " * La contraseña introducida no es valida";
        check=false;
    }else{
        document.getElementById('error_provincia').innerHTML = "";
    }
    if(!r_ciudad){
        document.getElementById('error_ciudad').innerHTML = " * El ciudad introducido no es valido";
        check=false;
    }else{
        document.getElementById('error_ciudad').innerHTML = "";
    }
    if(!r_direccion){
        document.getElementById('error_direccion').innerHTML = " * El direccion introducido no es valido";
        check=false;
    }else{
        document.getElementById('error_direccion').innerHTML = "";
    }
    if(!r_metros){
        document.getElementById('error_metros').innerHTML = " * No has seleccionado ningun genero";
        check=false;
    }else{
        document.getElementById('error_metros').innerHTML = "";
    }
    if(!r_habitaciones){
        document.getElementById('error_habitaciones').innerHTML = " * No has introducido ninguna fecha";
        check=false;
    }else{
        document.getElementById('error_habitaciones').innerHTML = "";
    }
    if(!r_banyos){
        document.getElementById('error_banyos').innerHTML = " * La banyos introducida no es valida";
        check=false;
    }else{
        document.getElementById('error_banyos').innerHTML = "";
    }
    if(!r_renta){
        document.getElementById('error_renta').innerHTML = " * No has seleccionado ningun renta";
        check=false;
    }else{
        document.getElementById('error_renta').innerHTML = "";
    }
    if(!r_tipo){
        document.getElementById('error_tipo').innerHTML = " * El texto introducido no es valido";
        check=false;
    }else{
        document.getElementById('error_tipo').innerHTML = "";
    }
    if(!r_precio){
        document.getElementById('error_precio').innerHTML = " * No has seleccionado ninguna precio";
        check=false;
    }else{
        document.getElementById('error_precio').innerHTML = "";
    }
    return check;
}
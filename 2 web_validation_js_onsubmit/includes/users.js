function validate_tituloAnuncio(tituloAnuncio) {
    if (tituloAnuncio.length > 0) {
        var regexp = /^[a-zA-Z0-9]*$/;
        return regexp.test(tituloAnuncio);
    }
    return false;
}
function validate_calle(calle) {
    if (calle.length > 0) {
        var regexp = /^[a-zA-Z0-9]*$/;
        return regexp.test(calle);
    }
    return false;
}
function validate_metros(metros) {
    if (metros.length > 0) {
        var regexp = /^[a-zA-Z0-9]*$/;
        return regexp.test(metros);
    }
    return false;
}

function validate_banyos(banyos) {
    if (banyos.length > 0) {
        var regexp = /^[a-zA-Z0-9]*$/;
        return regexp.test(banyos);
    }
    return false;
}

function validate_habitaciones(habitaciones) {
    if (habitaciones.length > 0) {
        var regexp = /^[a-zA-Z0-9]*$/;
        return regexp.test(habitaciones);
    }
    return false;
}

function validate_precio(precio) {
    if (precio.length > 0) {
        var regexp = /^[a-zA-Z0-9]*$/;
        return regexp.test(precio);
    }
    return false;
}

/*
function validate_email(email) {
    if (email.length > 0) {
        var regexp = /^[A-Z0-9._%+-]+@(?:[A-Z0-9-]+.)+[A-Z]{2,4}$/i;
        return regexp.test(email);
    }
    return false;
}

function validate_password(password) {
    if (password.length > 0) {
        var regexp = /^[a-zA-Z0-9]*$/;
        return regexp.test(password);
    }
    return false;
}
/*
function validate_password2(password, password2) {
	if(password === password2){
		return true;
    }
    return false;
}
*/
/*function validate_date_birthday(date_birthday) {
    if (date_birthday.length > 0) {
        var regexp = /\d{2}.\d{2}.\d{4}$/;
        return regexp.test(date_birthday);
    }
    return false;
}*/
function validate_anuncio() {
    var result = true;

    var tituloAnuncio = document.getElementById('tituloAnuncio').value;
	var calle = document.getElementById('calle').value;
	var metros = document.getElementById('metros').value;
	var banyos = document.getElementById('banyos').value;
	var habitaciones = document.getElementById('habitaciones').value;
	var precio = document.getElementById('precio').value;
    var fechaPiso = document.getElementById('fechaPiso').value;
	
	var v_tituloAnuncio = validate_tituloAnuncio(tituloAnuncio);
	var v_calle = validate_calle(calle);
	var v_metros = validate_metros(metros);
	var v_banyos = validate_banyos(banyos);
	var v_habitaciones = validate_habitaciones(habitaciones);
    var v_precio = validate_precio(precio);
	//var v_fechaPiso = fecha(fechaPiso);
	//var v_date_birthday = validate_date_birthday(date_birthday);

    if (!v_tituloAnuncio) {
        document.getElementById('e_tituloAnuncio').innerHTML = "El titulo del anuncio introducido no es valido";
        result = false;
    } else {
        document.getElementById('e_tituloAnuncio').innerHTML = "";
    }
	
	if (!v_calle) {
        document.getElementById('e_calle').innerHTML = "La calle introducida no es valida";
        result = false;
    } else {
        document.getElementById('e_calle').innerHTML = "";
    }
	
	if (!v_metros) {
        document.getElementById('e_metros').innerHTML = "Los metros introducidos no son validos";
        result = false;
    } else {
        document.getElementById('e_metros').innerHTML = "";
    }
	
	if (!v_banyos) {
        document.getElementById('e_banyos').innerHTML = "El numero de baños introducido no es valido";
        result = false;
    } else {
        document.getElementById('e_banyos').innerHTML = "";
    }
	
	if (!v_habitaciones) {
        document.getElementById('e_habitaciones').innerHTML = "El numero de habitaciones introducido no es valido";
        result = false;
    } else {
        document.getElementById('e_habitaciones').innerHTML = "";
    }
	
	if (!v_precio) {
        document.getElementById('e_precio').innerHTML = "El precio introducidono no es valido";
        result = false;
    } else {
        document.getElementById('e_precio').innerHTML = "";
    }

    /*if (!v_date_birthday) {
        document.getElementById('e_date_birthday').innerHTML = "La fecha introducida no es valida";
        result = false;
    } else {
        document.getElementById('e_date_birthday').innerHTML = "";
    }*/
	return result;
}
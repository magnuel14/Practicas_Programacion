$(document).ready(function () {
    $("#fecha_nac").change(function () {
        var edad = calcularEdad();
        $("#edad").val(edad);
    });

    $("#pass2").change(function () {
        validar_contra();

    });
});


function validar_contra() {
    var p1 = document.getElementById("pass1").value;
    var p2 = document.getElementById("pass2").value;
    var espacios = false;
    var cont = 0;

    while (!espacios && (cont < p1.length)) {
        if (p1.charAt(cont) == " ")
            espacios = true;
        cont++;
    }

    if (espacios) {
        alert("La contraseña no puede contener espacios en blanco")

        return false;
    }
    
    if (p1 != p2) {
        alert("Las claves deben de coincidir");

        return false;
    }
    else {
        alert("Todo esta correcto");


        return true;
    }
}

function calcularEdad() {
    var fecha = document.getElementById("fecha_nac");
    var hoy = new Date();
    var cumpleanos = new Date(fecha.value);
    var edad = hoy.getFullYear() - cumpleanos.getFullYear();
    var m = hoy.getMonth() - cumpleanos.getMonth();
    if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
        edad--;
    }
    if (edad >= 0) {
        return edad;
    }
}


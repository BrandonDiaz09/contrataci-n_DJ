// Función para mostrar u ocultar el campo de evento según la selección del tipo de evento.

function mostrarCampoEvento() {
    var tipoEvento = document.getElementById("tipo").value;
    var campoEvento = document.getElementById("campoEvento");

    if (tipoEvento === "Otro") {
        campoEvento.style.display = "block";
    } else {
        campoEvento.style.display = "none";
    }
}

// Función para validar el campo RFC.
function validarRFC() {
    var rfcInput = document.getElementById("rfc");
    var rfc = rfcInput.value.trim();

    if (rfc.length < 10 || rfc.length > 13) {
        alert("El RFC debe tener entre 10 y 13 caracteres");
        rfcInput.focus();
        return false;
    }

    var regexRFC = /^[A-Za-z]{4}\d{6}[A-Za-z0-9]{3}$/;
    if (!regexRFC.test(rfc)) {
        alert("El RFC ingresado no cumple con el formato válido");
        rfcInput.focus();
        return false;
    }

    return true;
}
var rfcInput = document.getElementById("rfc");
rfcInput.addEventListener("input", validarRFC);

//Función para validar que el usuario es mayor de edad (<18 años).
function validarEdad() {
    var fechaNacimientoInput = document.getElementById("fechaNacimiento");
    var fechaNacimiento = new Date(fechaNacimientoInput.value);
    var hoy = new Date();
    var edad = hoy.getFullYear() - fechaNacimiento.getFullYear();

    if (edad < 18) {
        alert("Debes ser mayor de edad para realizar la reservación/contratación");
        fechaNacimientoInput.focus();
        return false;
    }

    return true;
}
var fechaNacimientoInput = document.getElementById("fechaNacimiento");
fechaNacimientoInput.addEventListener("input", validarEdad);

// Función para validar que campo Nombre contenga unicamente letras y espacios.
function validarNombre() {
    var nombreInput = document.getElementById("nombre");
    var nombre = nombreInput.value.trim();

    var regexNombre = /^[A-Za-z\s]+$/;
    if (!regexNombre.test(nombre)) {
        alert("El nombre solo puede contener letras");
        nombreInput.focus();
        return false;
    }

    return true;
}
var nombreInput = document.getElementById("nombre");
nombreInput.addEventListener("input", validarNombre);

// Función para validar que el campo telefono lleve 10 digito y todos numeros.
function validarTelefono() {
    var telefonoInput = document.getElementById("telefono");
    var telefono = telefonoInput.value.trim();

    var regexTelefono = /^\d{10}$/;
    if (!regexTelefono.test(telefono)) {
        alert("El teléfono debe tener 10 dígitos");
        telefonoInput.focus();
        return false;
    }

    return true;
}
var telefonoInput = document.getElementById("telefono");
telefonoInput.addEventListener("input", validarTelefono);

// UnADM. funciones de validación de datos

function validarEntero(ctrl, requerido) {
    let valor = ctrl.value;

    if(requerido && !valor){
        alert('El dato es requerido');
        ctrl.focus();
        return false;
    }

    if(isNaN(valor)) {
        alert('El dato debe ser numérico');
        ctrl.focus();
        return false;
    }

    return true; // pasó las validaciones
}

function validarTexto(ctrl, requerido) {
    let valor = ctrl.value;

    if(requerido && !valor){
        alert('El dato es requerido');
        ctrl.focus();
        return false;
    }

    if(!isNaN(valor)) {
        alert('El dato debe ser texto, debe contener carateres alfanuméricos');
        ctrl.focus();
        return false;
    }

    return true; // pasó las validaciones
}

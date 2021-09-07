// Esta funcion se pasara a un boton
function procesarMes() {
    var mes = parseInt(document.getElementById("numeroMes").value);
    var resultado = document.getElementById("resultado");
    if (isNaN(mes)) {
        resultado.className = "alert alert-danger"; //añadimos una clase para cambiar el estilo del div
        resultado.innerHTML = "<strong> Asegurate de completar todas las entradas </strong>";
    } else {
        if (mes < 1 || mes > 12) {
            resultado.className = "alert alert-danger"; //añadimos una clase para cambiar el estilo del div
            resultado.innerHTML = "<strong> "+decirMes(mes)+" </strong>";
        } else {
            resultado.className = "alert alert-primary"; //añadimos una clase para cambiar el estilo del div
            resultado.innerHTML = "El mes es: " + decirMes(mes);
        }
    }
}

// Esta función devuelve el mes del año
function decirMes(dato) {
    var mes = "";
    switch (dato) {
        case 1:
            mes = "Enero";
            break;
        case 2:
            mes = "Febrero";
            break;
        case 3:
            mes = "Marzo";
            break;
        case 4:
            mes = "Abril";
            break;
        case 5:
            mes = "Mayo";
            break;
        case 6:
            mes = "Junio";
            break;
        case 7:
            mes = "Julio";
            break;
        case 8:
            mes = "Agosto";
            break;
        case 9:
            mes = "Septiembre";
            break;
        case 10:
            mes = "Octubre";
            break;
        case 11:
            mes = "Noviembre";
            break;
        case 12:
            mes = "Diciembre";
            break;
        default:
            mes = "El número ingresado no es válido"
            break;
    }
    return mes;
}
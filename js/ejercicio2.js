// Esta funcion se pasara a un boton
function calcularPago() {
    var cantidaKW = parseInt(document.getElementById("numeroKw").value);
    var resultado = document.getElementById("resultado");
    
    if (isNaN(cantidaKW)) {
        resultado.className = "alert alert-danger"; //añadimos una clase para cambiar el estilo del div
        resultado.innerHTML = "<strong> Asegurate de completar todas las entradas </strong>";
    } else {
        if (cantidaKW>=0) {
            var informacion  = "";
            resultado.className = "alert alert-primary"; //añadimos una clase para cambiar el estilo del div
            informacion += "Su Consumo de Kw es: "+cantidaKW+"<br>";
            informacion += "El total a pagar a EEO: $"+totalPagar(cantidaKW);
            resultado.innerHTML = informacion;
        }else{
            resultado.className = "alert alert-danger"; //añadimos una clase para cambiar el estilo del div
            resultado.innerHTML = "<strong> Ingresa solo numeros postivos </strong>";
        }
    }
}

//Esta funcion calcula el total a pagar
function totalPagar(kw) {
    var totalPagar = 0;
    if (kw <= 200) {
        totalPagar = kw*0.21;
    }else if(kw >200 && kw < 1000){
        totalPagar = kw*0.32;
    }else{
        totalPagar = kw*0.36;
    }
    return totalPagar;
}
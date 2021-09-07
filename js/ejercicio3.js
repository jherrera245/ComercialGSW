// Esta funcion se pasara a un boton
function determinarTriangulo() {
    var lado1 = parseInt(document.getElementById("lado1").value);
    var lado2 = parseInt(document.getElementById("lado2").value);
    var lado3 = parseInt(document.getElementById("lado3").value);

    var resultado = document.getElementById("resultado");
    
    if (isNaN(lado1) || isNaN(lado2) || isNaN(lado3)) {
        resultado.className = "alert alert-danger"; //añadimos una clase para cambiar el estilo del div
        resultado.innerHTML = "<strong> Asegurate de completar todas las entradas </strong>";
    } else {
        if (lado1>0 || lado2>0 || lado3>0) {
            resultado.className = "alert alert-primary"; //añadimos una clase para cambiar el estilo del div
            resultado.innerHTML = decirTriangulo(lado1, lado2, lado3);
        }else if(isTriangulo(lado1, lado2, lado3) == false){
            resultado.className = "alert alert-danger"; //añadimos una clase para cambiar el estilo del div
            resultado.innerHTML = "<strong> Lo sentimos pero los lados ingresados no forman un triangulo </strong>";
        }else{
            resultado.className = "alert alert-danger"; //añadimos una clase para cambiar el estilo del div
            resultado.innerHTML = "<strong> Ingresa solo numeros postivos mayores a cero</strong>";
        }
    }
}

//Esta funcion valida que los lados formen un triangulo
// condicones para que los lados formen un triangulo
// a + b > c
// b + c > a
// a + c > b
function  isTriangulo(lado1, lado2, lado3) {
    if ((lado1+lado2) > lado3) {
        return true;
    }else if((lado2+lado3) > lado1){
        return true;
    }else if((lado1+lado3) > lado2){
        return true
    }
    return false;
}

//Esta funcion calcula el total a pagar
function decirTriangulo(lado1, lado2, lado3) {
    var tipoTrinangulo = "";
    if (lado1==lado2 && lado1 == lado3) {
        tipoTrinangulo = "Estos lados forman un Trinagulo es Equilatero";
    }else if(lado1==lado2 || lado1==lado3 || lado2==lado3){
        tipoTrinangulo = "Estos lados forman un Tringulo es Isoseles";
    }else{
        tipoTrinangulo = "Estos lados forman un Tringulo es Escaleno";
    }
    return tipoTrinangulo;
}
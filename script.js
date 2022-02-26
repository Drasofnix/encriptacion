function encriptar(elemento){
    var texto = document.getElementsByTagName("input")[0].value;
    var codigo = btoa(texto);
    document.getElementById("encriptado").innerHTML = codigo;
};

function desencriptar(elemento){
    var texto = document.getElementsByTagName("input")[0].value;
    var decodificar = atob(texto);
    document.getElementById("encriptado").innerHTML = decodificar;
};
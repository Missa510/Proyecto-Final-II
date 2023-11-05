// Variables globales
const titulo = document.getElementById("titulo").textContent
const nombre_empresa = document.getElementById("nombre_empresa").textContent
const botones = document.getElementsByClassName("linx"), TextoBotones = botones.innerText
//Funciones
function ActualizarTitulo() {
    if (titulo == "Administradores" || titulo == "Moderadores" || titulo == "Usuarios normales") { Fecha() }
    document.querySelector('TITLE').innerText = nombre_empresa + " | " + titulo
}


function Fecha() {
    // Mostrar la fecha de hoy
    let hoy = new Date();

    let dia = hoy.getDate();
    let mes = hoy.getMonth();
    let anyo = hoy.getFullYear();
    let hora = hoy.getHours();
    let minutos = hoy.getMinutes();
    // let semana = hoy.getTimezoneOffset();

    let meses = [
        "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
        "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
    ];
    // let semanas = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado", "Domingo"];

    dia = ('0' + dia).slice(-2);
    anyo = ('0' + anyo).slice(-4);
    if (minutos < 10) {
        minutos = ('0' + minutos);
    }
    if (hora < 10) {
        hora = ('0' + hora);
    }

    let formato = "Fecha y hora actual: " +
        dia + ' de ' + meses[mes] + ' del ' + anyo + '; ' + hora + ':' + minutos + '\n';

    document.getElementById("fecha").innerText = formato;
}

function ViewPassword() {
    var tipo = document.getElementById("Password");
    if (tipo.type == "password") {
        tipo.type = "text";
    } else {
        tipo.type = "password";
    }
}

//Lo demás
ActualizarTitulo()
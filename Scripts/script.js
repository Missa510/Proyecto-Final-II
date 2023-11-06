// Variables globales
const conteo = document.getElementsByClassName("Header")
for (let i = 0; i < conteo.length; i++) {
    const texto = conteo.item(i).textContent
    document.querySelector('TITLE').innerText = "Inverciones GO | " + texto
}
//Funciones


function ViewPassword() {
    var tipo = document.getElementById("password");
    if (tipo.type == "password") {
        tipo.type = "text";
    } else {
        tipo.type = "password";
    }
}

var acc = document.getElementsByClassName("acordeon");
var i;

function ZeroBitch() {
    let numero = document.getElementById("id_cantidad").value
    if (numero == 0) {
        alert('Al cambiar la cantidad a 0, la existencia se inactiva. La puedes editar despues')
    }
}

// console.log(acc)

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");

        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === "flex") {
            panel.style.display = "none";
        } else {
            panel.style.display = "flex";
        }
    });
}
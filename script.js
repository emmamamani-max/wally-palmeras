
const menuToggle=document.getElementById("menu-toggle");
const navLinks=document.getElementById("nav-links");

menuToggle.addEventListener("click",function(){

    navLinks.classList.toggle("active")

});
const cuerpo = document.querySelector("body");
const botonModo = document.querySelector("#btn-tema");
let esDeDia = false;

function alternarModo() {
  cuerpo.classList.toggle("claro");

  esDeDia = !esDeDia;

if (esDeDia) {
    botonModo.textContent = "🌙 Modo noche";
  } else {
    botonModo.textContent = "☀️ Modo día";
  }
}
botonModo.addEventListener("click", alternarModo);
const botonMenu = document.querySelector("#btn-menu");
const menu = document.querySelector("nav ul");

function alternarMenu() {
  menu.classList.toggle("abierto");
}

botonMenu.addEventListener("click", alternarMenu);


const formularioReserva = document.querySelector("#form-reserva");
const avisoReserva = document.querySelector("#error-reserva");
function revisarReserva(event) {
 event.preventDefault();
 if (nombre === "") {
    avisoReserva.textContent = "Debe llenar con su nombre, estimado cliente.";
    avisoReserva.classList.add("error");
    avisoReserva.classList.remove("exito");
  } else if (correo.includes("@") === false) {
    avisoReserva.textContent = "Llenar con los caracteres correspondientes: le falta el @.";
    avisoReserva.classList.add("error");
    avisoReserva.classList.remove("exito");
  } else {
    // Pasó las dos revisiones: recién ahí avisamos que está bien.
    avisoReserva.textContent = "Reserva registrada, le esperamos con las puertas abiertas, estimado cliente. Gracias por su reserva!!.";
    avisoReserva.classList.add("exito");
    avisoReserva.classList.remove("error");
  }
}
formularioReserva.addEventListener("submit", revisarReserva);

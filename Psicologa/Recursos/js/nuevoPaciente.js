"use strict";
let formular = document.getElementById("formulario");
formular.addEventListener("submit", async (e) => {
    e.preventDefault();
    const formD = new FormData(formular);
    const peticion = await fetch('./bckPacientesAgregar.php', { body: formD, method: 'POST' });
    const respuesta = await peticion.text();
    console.log(respuesta);
    if (peticion.status === 200) {
        alert("Paciente agregado con éxito");
        formular.reset();
    }
    else {
        alert("Error al agregar paciente");
    }
});

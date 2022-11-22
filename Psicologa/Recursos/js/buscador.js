"use strict";
const contenedor = document.getElementById("contenedor-pacientes");
const input = document.getElementById("buscador");
input.addEventListener("keyup", async (e) => {
    console.log(input.value);
    const formD = new FormData();
    formD.append("consulta", input.value);
    const peticion = await fetch('./bckPacientesBuscar.php', { body: formD, method: 'POST' });
    contenedor.innerHTML = await peticion.text();
});

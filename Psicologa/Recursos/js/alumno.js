(function(){function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){var n=e[i][1][r];return o(n||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}return r})()({1:[function(require,module,exports){
"use strict";
const botonMostrar = document.getElementById("mostrar");
const formulari = document.getElementById('formulario');
botonMostrar.addEventListener('click', () => {
    formulari.toggleAttribute('hidden');
});
formulari.addEventListener('submit', async (e) => {
    e.preventDefault();
    const formData = new FormData(formulari);
    const respuesta = await fetch('./bckConsultarCrear.php', { body: formData, method: 'POST' });
    if (respuesta.status === 200) {
        alert("Consulta creada con éxito");
        formulari.reset();
        formulari.toggleAttribute('hidden');
    }
    else {
        console.log(await respuesta.text());
        alert("Error al crear consulta");
    }
});

},{}]},{},[1]);

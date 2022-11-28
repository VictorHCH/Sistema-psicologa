"use strict";
const formulario = document.getElementById('form-login');
formulario.addEventListener('submit', async (e) => {
    e.preventDefault();
    const usuario = formulario.querySelector('#usuario');
    const pass = formulario.querySelector('#pass');
    const data = new FormData();
    data.append('usuario', usuario.value);
    data.append('pass', pass.value);
    const res = await fetch('./bckLogin.php', { method: 'POST', body: data, credentials: "same-origin" });
    // console.log(res);
    const text = await res.text();
    console.log(text);
    res.status === 200 ? window.location.href = './index.php' : alert('Usuario o contraseña incorrectos');
});

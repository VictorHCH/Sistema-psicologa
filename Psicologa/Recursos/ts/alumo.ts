const botonMostrar = document.getElementById("mostrar") as HTMLButtonElement
const formulari = document.getElementById('formulario') as HTMLFormElement

botonMostrar.addEventListener('click', () => {
    formulari.toggleAttribute('hidden')
})

formulari.addEventListener('submit', async (e) => {
    e.preventDefault()
    const formData = new FormData(formulari)
    const respuesta = await fetch('./bckConsultarCrear.php', {body: formData, method: 'POST'})
    if(respuesta.status === 200){
        alert("Consulta creada con éxito")
        formulari.reset()
        formulari.toggleAttribute('hidden')
    }
    else{
        console.log(await respuesta.text())
        alert("Error al crear consulta")
    }
})

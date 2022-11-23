import {DateTime} from 'ts-luxon'

const Fechas = document.getElementsByClassName("Dia") as HTMLCollectionOf<HTMLSpanElement>
const Horas = document.getElementsByClassName("Hora") as HTMLCollectionOf<HTMLSpanElement>
for (let i = 0; i < Fechas.length; i++) {
    let span = Fechas[i];
    const fecha = DateTime.fromSQL(span.innerText).setLocale("mx")
    span.innerText = fecha.toLocaleString(DateTime.DATE_HUGE)
}
for (let i = 0; i < Horas.length; i++) {
    let span = Horas[i];
    const hora = DateTime.fromSQL(span.innerText).setLocale("mx")
    span.innerText = hora.toLocaleString(DateTime.TIME_SIMPLE)
}


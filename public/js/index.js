document.addEventListener("DOMContentLoaded", (event) => {
    document.getElementById('btnBusca').addEventListener('click', function() {
        buscarRestaurantes();
    });
});

async function buscarRestaurantes() {

    let texto   = document.getElementById('inputBusca').value;
    let form    = document.getElementById('formBuscaRestaurantes');
    let div     = document.querySelector('div#resultadoBusca div[data-resultados]');
    let divini  = document.querySelector('div#resultadoBusca div[data-inicio]');
    let divnada = document.querySelector('div#resultadoBusca div[data-naoencontrado]');


    if (texto.length < 3) {
        return;
    }
    
    //  Chamada.
    const fd = new FormData(form);

    const r = await fetch('/restaurantes', {
        method: 'POST',
        body: fd
    });

    const retorno = await r.text();

    divini.classList.add('d-none');
    div.innerHTML = retorno;
    div.classList.remove('d-none');
}
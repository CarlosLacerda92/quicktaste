document.addEventListener("DOMContentLoaded", (event) => {
    document.getElementById('btnBusca').addEventListener('click', function() {
        buscarRestaurantes();
    });

    document.getElementById('inputBusca').addEventListener('keypress', function(event) {
        if (event.key === 'Enter') {
            event.preventDefault();
            buscarRestaurantes();
        }
    });
});

async function buscarRestaurantes() {

    let texto   = document.getElementById('inputBusca').value;
    let form    = document.getElementById('formBuscaRestaurantes');
    let div     = document.querySelector('div#resultadoBusca div[data-resultados]');
    let divini  = document.querySelector('div#resultadoBusca div[data-inicio]');
    let divnada = document.querySelector('div#resultadoBusca div[data-naoencontrado]');
    let divload = document.querySelector('div#resultadoBusca div[data-carregando]');

    if (texto.length < 3) {
        return;
    }

    div.classList.add('d-none');
    divini.classList.add('d-none');
    divnada.classList.add('d-none');
    divload.classList.remove('d-none');
    
    //  Chamada.
    const fd = new FormData(form);

    const r = await fetch('/restaurantes', {
        method: 'POST',
        body: fd
    });

    const retorno = await r.text();

    divload.classList.add('d-none');

    if (!retorno) {
        divnada.classList.remove('d-none');
        return;
    }

    div.innerHTML = retorno;
    div.classList.remove('d-none');
}
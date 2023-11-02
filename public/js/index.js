document.addEventListener("DOMContentLoaded", (event) => {
    document.getElementById('btnBusca').addEventListener('click', function() {
        buscarRestaurantes();
    });
});

async function buscarRestaurantes() {

    let texto = document.getElementById('inputBusca').value;
    let form  = document.getElementById('formBuscaRestaurantes');

    if (texto.length < 3) {
        return;
    }
    
    //  Chamada.
    const fd = new FormData(form);

    const r = await fetch('/restaurantes', {
        method: 'POST',
        body: fd
    });

    const {success, output} = await r.json();

    //console.log(success);
}
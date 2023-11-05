
<x-inicio />

<x-cabecalho endereco="Rua Laranjeiras, 415, São Lucas" qtdNotificacoes="7" usuario="3" />

<script src="{{ asset('js/index.js') }}"></script>
    
<div class="div-bem-vindo">
    <div class="bem-vindo-overlay">
        <div class="conteudo">
            <h1 style="margin: 0;">
                Olá, <span style="font-weight: bold; color: var(--principal);">{{ Auth::user()->name }}!</span>
            </h1>
            <h3 style="margin: 0;">
                Como está sua fome hoje?
            </h3>
        </div>
        <form id="formBuscaRestaurantes">
            <div class="input-group w-50">
            
                <input type="text" id="inputBusca" name="inputBusca" class="form-control" placeholder="Descubra pratos, restaurantes e mais!" />
                @csrf
                <button type="button" id="btnBusca" class="qk-btn qk-btn-princ">
                    <i class="fa-solid fa-magnifying-glass fa-fw"></i>
                </button>
            </div>
        </form>
    </div>
</div>

<div id="resultadoBusca">
    <div class="w-100 d-flex align-items-center justify-content-center" data-inicio>
        <img class="img-svg" src="{{ asset('img/svg/restaurant-flatline.svg') }}" />
        <div class="d-flex flex-column gap-2">
            <span>
                Busque pelos seus pratos e restaurantes favoritos!
            </span>
            <span style="font-size: 1.5rem; font-weight: 600;">
                É simples e rápido!
            </span>
        </div>
    </div>
    <div class="w-100 d-flex align-items-center justify-content-center d-none" data-naoencontrado>
        <img class="img-svg" src="{{ asset('img/svg/pizza-flatline.svg') }}" />
        <div class="d-flex flex-column gap-2">
            <span style="font-size: 1.5rem; font-weight: 600;">
                Nenhum resultado encontrado...
            </span>
            <span>
                Tente uma nova busca!
            </span>
        </div>
    </div>
    <div class="d-none flex-column" style="padding: 2rem; gap: 2rem;" data-resultados>

    </div>
    <div class="w-100 d-flex align-items-center justify-content-center d-none" data-carregando>
        <dotlottie-player src="https://lottie.host/a39cb574-ac6b-40ce-a3b7-148bcf72fdac/B7JaCiqiPp.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
        <div class="d-flex flex-column gap-2">
            <span style="font-size: 1.5rem; font-weight: 600;">
                Buscando resultados...
            </span>
        </div>
    </div>
</div>

<x-fim />
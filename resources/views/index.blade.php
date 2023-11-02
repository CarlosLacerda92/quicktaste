
<x-inicio />

<x-cabecalho endereco="Rua Laranjeiras, 415, São Lucas" qtdNotificacoes="7" usuario="3" />

<script src="{{ asset('js/index.js') }}"></script>
    
<div class="div-bem-vindo">
    <div class="bem-vindo-overlay">
        <div class="conteudo">
            <h1 style="margin: 0;">
                Bem-vindo, <span style="font-weight: bold; color: var(--principal);">Fulano!</span>
            </h1>
            <h3 style="margin: 0;">
                Como está sua fome hoje?
            </h3>
        </div>
        <form id="formBuscaRestaurantes">
            <div class="input-group w-50">
            
                <input type="text" id="inputBusca" name="inputBusca" class="form-control" placeholder="Descubra pratos, restaurantes e mais em uma velocidade incrível!" />
                @csrf
                <button type="button" id="btnBusca" class="qk-btn qk-btn-princ">
                    <i class="fa-solid fa-magnifying-glass fa-fw"></i>
                </button>
            </div>
        </form>
    </div>
</div>

<div id="resultadoBusca" class="w-100 d-flex align-items-center justify-content-center">
    <img class="img-svg" src="{{ asset('img/svg/restaurant-flatline.svg') }}" />
    <div class="d-flex flex-column gap-2">
        <span>
            Busque pelos seus pratos e restaurantes favoritos!
        </span>
        <span style="font-size: 1.5rem; font-weight: 600;">
            É simples e rápido!
        </span>
    </div>
    {{-- <x-card-grid /> --}}
</div>

<x-fim />
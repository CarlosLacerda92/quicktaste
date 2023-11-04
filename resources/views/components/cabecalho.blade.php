<link href="{{ asset('css/components/cabecalho.css') }}" rel="stylesheet">

<div class="cabecalho">

    <div class="logo">
        <span style="font-style: italic;">Quick</span><span style="font-weight: 600;">Taste</span>
    </div>

   <div class="cabecalho-endereco">
        <span>
            Entregar em &nbsp;
        </span>
        <i class="fa-solid fa-location-dot"></i>
        <span>
            {{$endereco}}
        </span>
   </div>

    <div class="container-perfil">

        <div class="icones">

            <button type="button" class="qk-btn qk-btn-princ" data-bs-toggle="tooltip" title="Pedidos">
                <i class="fa-solid fa-cart-shopping fa-fw"></i>
            </button>

            <button type="button" class="qk-btn qk-btn-princ position-relative" data-bs-toggle="tooltip" title="Notificações">

                <i class="fa-solid fa-bell fa-fw"></i>

                <span class="position-absolute translate-middle badge rounded-pill bg-qk-verm" style="top: 5px; left: 40px;">
                    {{$qtdNotificacoes}}
                    <span class="visually-hidden">
                        Notificações não lidas
                    </span>
                </span>
            </button>
        </div>
        
        <div class="cabecalho-perfil dropdown">
            <img class="foto-perfil" src="{{ asset('storage/fotos_perfil/id_3.png') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false" />
            <x-dropdown />
        </div>
    </div>
</div>
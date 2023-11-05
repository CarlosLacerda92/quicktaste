@php
    #   Buscando o endereço ativo do usuário.
    $endereco = '';

    $buscaEndereco = App\Http\Controllers\UsuarioEnderecoController::buscarEnderecoUsuario(Auth::user()->id);

    if ($buscaEndereco->resource) {
        $endereco = $buscaEndereco->logradouro . ', ' . $buscaEndereco->numero . ', ' . $buscaEndereco->bairro;
    }
@endphp

<link href="{{ asset('css/components/cabecalho.css') }}" rel="stylesheet">

<div class="cabecalho">

    <div class="logo">
        <span style="font-style: italic;">Quick</span><span style="font-weight: 600;">Taste</span>
    </div>

   <div class="cabecalho-endereco">
        @if ($endereco)
            <span>
                Entregar em &nbsp;
            </span>
            <i class="fa-solid fa-location-dot"></i>
            <span>
                {{$endereco}}
            </span>
        @else
            <span>
                Nenhum endereço encontrado!
            </span>
            <span>
                Clique aqui e faça o cadastro!
            </span>
        @endif
   </div>

    <div class="container-perfil">

        <div class="icones">

            <button type="button" class="qk-btn qk-btn-princ" data-bs-toggle="tooltip" title="Pedidos">
                <i class="fa-solid fa-cart-shopping fa-fw"></i>
            </button>

            <button type="button" class="qk-btn qk-btn-princ position-relative" data-bs-toggle="tooltip" title="Notificações">

                <i class="fa-solid fa-bell fa-fw"></i>

                <span class="position-absolute translate-middle badge rounded-pill bg-qk-verm" style="top: 5px; left: 40px;">
                    {{ $qtdNotificacoes }}
                    <span class="visually-hidden">
                        Notificações não lidas
                    </span>
                </span>
            </button>
        </div>
        
        <div class="cabecalho-perfil dropdown">
            <img class="foto-perfil" src="{{ asset('storage/fotos_perfil/id_' . $usuario . '.png') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false" />
            <x-dropdown />
        </div>
    </div>
</div>
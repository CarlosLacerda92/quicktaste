<link href="{{ asset('css/components/restaurante.css') }}" rel="stylesheet">

<x-inicio />

<x-cabecalho qtdNotificacoes="7" usuario="{{ Auth::user()->id }}" />

@php
    /* echo '<pre>pppppppppp';
    print_r($restaurante);
    echo '</pre>'; */
@endphp

<div class="restaurante">

    <div class="div-banner-rest" style="background-image: url({{ asset('storage/fotos_restaurantes/id_' . $restaurante->id . '.jpg') }});">
        
        <div class="d-flex align-items-center gap-3 position-absolute top-0 end-0 mt-3 me-3">
            <div>
                @for ($i = 1; $i <= 5; $i++)
                    <i class="fa-solid fa-star {{ $i <= (int)$restaurante->nota ? "txt-qk-princ" : "txt-qk-cinza-claro" }}"></i>
                @endfor
                <span class="txt-qk-princ">
                    <strong>{{ $restaurante->nota }}</strong>
                </span>
            </div>
            <div>
                <i class="fa-solid fa-clock"></i>
                <span>
                    {{ $restaurante->tempo_entrega }}min
                </span>
            </div>
            <div>
                <i class="fa-solid fa-money-bill"></i>
                <span>
                    R${{ $restaurante->taxa_entrega }}
                </span>
            </div>
        </div>

        <div class="banner-rest-overlay">
            <div class="conteudo">
                <h1 style="margin: 0;">
                    <span style="font-weight: bold; color: var(--principal);">{{ $restaurante->nome }}</span>
                </h1>
                <h3 style="margin: 0;">
                    {{ $restaurante->nomecategoria }}
                </h3>
            </div>
        </div>

        <div class="d-flex align-items-center gap-3 position-absolute bottom-0 end-0 mb-3 me-3" style="font-size: 0.875rem;">
            {{ $restaurante->logradouro }}, {{ $restaurante->numero }}, {{ $restaurante->bairro }}
        </div>

    </div>

    <div style="padding: 2rem;">
        <h4>
            Cardápio
        </h4>
    </div>
</div>
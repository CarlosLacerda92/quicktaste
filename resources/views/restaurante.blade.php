<link href="{{ asset('css/components/restaurante.css') }}" rel="stylesheet">

<x-inicio />

<x-cabecalho qtdNotificacoes="7" usuario="{{ Auth::user()->id }}" />

<div class="restaurante">

    <div class="div-banner-rest" style="background-image: url({{ asset('storage/fotos_restaurantes/id_' . $restaurante->id . '.jpg') }});">
        
        <div class="dados-topo d-flex align-items-center gap-3 position-absolute top-0 end-0 mt-3 me-3">
            <div class="nota">
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

        <div class="dados-bottom d-flex align-items-center gap-2 position-absolute bottom-0 end-0 mb-3 me-3" style="font-size: 0.875rem;">
            <span>
                {{ $restaurante->logradouro }}, {{ $restaurante->numero }}, {{ $restaurante->bairro }} | {{ $restaurante->cidade }} - {{ $restaurante->estado }} |
            </span>
            <span>
                @if ($restaurante->whatsapp)
                    <i class="fa-brands fa-whatsapp" style="font-size: 1.125rem;"></i>
                @endif
                {{ $restaurante->telefone }}
            </span>
        </div>
    </div>

    <div class="div-dados-mobile">
        <div class="d-flex justify-content-center align-items-center gap-3">
            <div class="nota">
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
        <div class="d-flex flex-column justify-content-center align-items-center gap-2" style="font-size: 0.875rem;">
            <span>
                {{ $restaurante->logradouro }}, {{ $restaurante->numero }}, {{ $restaurante->bairro }} | {{ $restaurante->cidade }} - {{ $restaurante->estado }}
            </span>
            <span>
                @if ($restaurante->whatsapp)
                    <i class="fa-brands fa-whatsapp" style="font-size: 1.125rem;"></i>
                @endif
                {{ $restaurante->telefone }}
            </span>
        </div>
    </div>

    <div class="div-cardapio flex-column d-flex">
        <h4 class="mb-0">
            Cardápio
        </h4>
        @if ($cardapio)
            <div class="qk-card-grid">
                @foreach ($cardapio as $c)
                    <x-card-cardapio :idrestaurante="$c['id_restaurante']" :id="$c['id']" :nome="$c['nome']" :descricao="$c['descricao']" :categoria="$c['categoria']" :descrcategoria="$c['nomecategoria']" :preco="$c['preco']" />
                @endforeach
            </div>
        @else
            <div class="div-sem-cardapio w-100 d-flex align-items-center justify-content-center">
                <img class="img-svg" src="{{ asset('img/svg/fast-food-flatline.svg') }}" />
                <div class="d-flex flex-column gap-2">
                    <span style="font-size: 1.5rem; font-weight: 600;">
                        Este restaurante ainda não cadastrou seu cardápio!
                    </span>
                </div>
            </div>
        @endif
        </div>
    </div>
</div>
<link href="{{ asset('css/components/cardrestaurante.css') }}" rel="stylesheet">

<div class="card-restaurante">
    <div style="height: 10rem; overflow: hidden;">
        <img src="{{ asset($imgsrc) }}" />
    </div>
    <div class="card-restaurante-conteudo">
        <h6 class="card-restaurante-cabecalho mb-0">
            {{ $nome }}
        </h6>
        <div class="d-flex align-items-center gap-2" style="font-size: 0.75rem;">
            <div>
                @for ($i = 1; $i <= 5; $i++)
                    <i class="fa-solid fa-star txt-qk-cinza-claro"></i>
                @endfor
            </div>
            <span class="txt-qk-princ">
                <strong>4,5</strong>
            </span>
            <span class="txt-qk-cinza">
                (19 avaliações)
            </span>
        </div>
        <div class="d-flex align-items-center justify-content-between gap-2" style="font-size: 0.75rem;">
            <div class="d-flex align-items-center gap-2">
                <i class="fa-solid fa-utensils"></i>
                <span>
                    Fast food
                </span>
            </div>
            <div class="d-flex align-items-center gap-2" data-bs-toggle="tooltip" title="Tempo estimado de entrega">
                <i class="fa-solid fa-clock"></i>
                <span>
                    20 ~ 50min
                </span>
            </div>
            <div class="d-flex align-items-center gap-2" data-bs-toggle="tooltip" title="Valor cobrado pela entrega">
                <i class="fa-solid fa-money-bill"></i>
                <span>
                    R$5,99
                </span>
            </div>
        </div>
    </div>
</div>
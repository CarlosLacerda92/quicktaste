<link href="{{ asset('css/components/cardcardapio.css') }}" rel="stylesheet">

<form action="/restaurante" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$id}}">
    <div class="card-cardapio">
        <div style="height: 10rem; overflow: hidden;">
            <img src="{{ asset("storage/fotos_cardapios/id_{$idrestaurante}_{$id}.jpg") }}" />
        </div>
        <div class="card-cardapio-conteudo">
            <h6 class="card-cardapio-cabecalho mb-0">
                {{$nome}}
            </h6>
            <div class="descricao">
                {{$descricao}}
            </div>
            <div class="d-flex align-items-center justify-content-between gap-2" style="font-size: 0.75rem;">
                <div class="d-flex align-items-center gap-2">
                    <i class="fa-solid fa-utensils"></i>
                    <span>
                        {{$descrcategoria}}
                    </span>
                </div>
                <div class="d-flex align-items-center gap-2" data-bs-toggle="tooltip" title="Valor cobrado pela entrega">
                    <i class="fa-solid fa-money-bill"></i>
                    <span>
                        {{$preco}}
                    </span>
                </div>
            </div>
        </div>
    </div>
</form>
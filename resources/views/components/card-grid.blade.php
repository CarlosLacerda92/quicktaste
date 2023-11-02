<link href="{{ asset('css/components/cardgrid.css') }}" rel="stylesheet">

<div class="qk-card-grid">
    @foreach ($restaurantes as $r)
        <x-card-restaurante :nome="$r['nome']" />
    @endforeach
</div>
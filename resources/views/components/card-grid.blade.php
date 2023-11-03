<link href="{{ asset('css/components/cardgrid.css') }}" rel="stylesheet">

<?php
/* echo '<pre>';
print_r($restaurantes);
die; */
?>

<div class="qk-card-grid">
    @foreach ($restaurantes as $r)
        <x-card-restaurante :id="$r['id']" :nome="$r['nome']" :nota="$r['nota']" :nota="$r['nota']" :categoria="$r['categoria']" :nomecategoria="$r['nomecategoria']" :tempoentrega="$r['tempo_entrega']" :taxaentrega="$r['taxa_entrega']" />
    @endforeach
</div>
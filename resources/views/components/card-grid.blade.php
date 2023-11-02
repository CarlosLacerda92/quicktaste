<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem;">
    @foreach ($restaurantes as $r)
        <x-card-restaurante :nome="$r['nome']" />
    @endforeach
</div>
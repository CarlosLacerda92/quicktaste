<div class="cabecalho">

    <div class="logo">
        QuickTaste
    </div>

   {{--  <input type="text" class="qk-input" placeholder="Busque restaurantes aqui!" /> --}}

   <div class="cabecalho-menus">

        <span>
            Home
        </span>

        <span>
            Restaurantes
        </span>
        
        <span>
            Ajuda
        </span>
   </div>

    <div style="display: flex; align-items: center; gap: 1rem;">

        <div style="display: flex; aligin-items: center; gap: 1.5rem;">
            <i class="fa-solid fa-magnifying-glass" style="font-size: 1.25rem;"></i>
            <i class="fa-solid fa-bell" style="font-size: 1.25rem;"></i>
            <i class="fa-solid fa-cart-shopping" style="font-size: 1.25rem;"></i>
        </div>
        
        <div class="cabecalho-perfil">
            <img class="foto-perfil" src="{{ asset('storage/fotos_perfil/id_3.png') }}" />
            <span>
                Nome
            </span>
            <i class="fa-solid fa-chevron-down"></i>
        </div>
    </div>
</div>
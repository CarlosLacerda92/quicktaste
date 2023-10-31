
<x-inicio />

<x-cabecalho />

<div class="princ">
    
    <div class="div-bem-vindo">
        
        {{-- <div style="display: flex; align-items: center; gap: 1rem;"> --}}

            {{-- <img src="{{ asset('storage/fotos_perfil/id_3.png') }}" style="width: 5rem;" /> --}}

            <div style="display: flex; flex-direction: column; justify-content: center; width: 100%;">
                <h1 style="margin: 0;">
                    Bem-vindo, Fulano!
                </h1>
                <h3 style="margin: 0;">
                    Como está sua fome hoje?
                </h3>
            </div>
        {{-- </div> --}}
        <input type="text" class="qk-input" placeholder="Descubra pratos, restaurantes e mais!" style=" width: 50%" /> 
    </div>
</div>

<x-fim />
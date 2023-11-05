<link href="{{ asset('css/components/dropdown.css') }}" rel="stylesheet">

<ul class="dropdown-menu">

    <li class="cabecalho-dropdown">
        <h6 class="dropdown-header">
            {{ Auth::user()->name }}
        </h6>
    </li>

    <li>
        <a class="dropdown-item" href="#">
            <i class="fa-solid fa-credit-card fa-fw"></i>
            <span>
                Pagamentos
            </span>
        </a>
    </li>

    <li>
        <a class="dropdown-item" href="#">
            <i class="fa-solid fa-note-sticky fa-fw"></i>
            <span>
                Cupons
            </span>
        </a>
    </li>

    <li>
        <a class="dropdown-item" href="#">
            <i class="fa-solid fa-location-dot fa-fw"></i>
            <span>
                Endereços
            </span>
        </a>
    </li>

    <li>
        <a class="dropdown-item" href="#">
            <i class="fa-solid fa-table fa-fw"></i>
            <span>
                Meus dados
            </span>
        </a>
    </li>

    <li>
        <hr class="dropdown-divider">
    </li>

    <li>
        <a class="dropdown-item" href="#">
            <i class="fa-solid fa-gear fa-fw"></i>
            <span>
                Configurações
            </span>
        </a>
    </li>

    <li>
        <a class="dropdown-item" href="#">
            <i class="fa-solid fa-circle-question fa-fw"></i>
            <span>
                Ajuda
            </span>
        </a>
    </li>

    <li>
        <hr class="dropdown-divider">
    </li>

    <li>
        <a class="dropdown-item" href="#">
            <i class="fa-solid fa-right-from-bracket fa-fw"></i>
            <form action="{{ route('sair') }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="qk-btn qk-btn-princ" style="padding: 0.25rem 0.5rem;">
                    Sair
                </button>
            </form>
        </a>
    </li>
</ul>
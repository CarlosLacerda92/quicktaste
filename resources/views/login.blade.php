<?php

?>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>QuickTaste | Login</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('front_end_assets/bootstrap53/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('front_end_assets/fontawesome642/css/all.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/cores.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/global.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/login.css') }}" />

        <script src="{{ asset('front_end_assets/bootstrap53/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/global.js') }}"></script>
        <script src="{{ asset('js/login.js') }}"></script>
        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
    </head>

    <body>
        <div class="login-container">

            <div class="login-titulo">
                <h4 class="txt-qk-princ mb-0">
                    <span style="font-style: italic;">Quick</span><span style="font-weight: 600;">Taste</span>
                </h4>
                <span style="color: #ffffff;">
                    Milhares de restaurantes à sua disposição!
                </span>
            </div>
            
            <div class="login-box">

                <h3>
                    Log<span class="txt-qk-princ">in</span>
                </h3>
                
                <form id="formlogin" class="d-flex flex-column align-items-center justify-content-center gap-4 needs-validation" method="POST" action="/api/autenticar">
                    @csrf
                    <div class="d-flex flex-column gap-1 w-100">
                        <div class="input-group w-100">
                            <span class="input-group-text">
                                <i class="fa-solid fa-envelope"></i>
                            </span>
                            <input type="text" class="form-control" id="email" name="email" placeholder="E-mail">
                        </div>
                        <small class="txt-qk-verm d-none" data-validar="email"></small>
                    </div>

                    <div class="d-flex flex-column gap-1 w-100">
                        <div class="input-group flex-nowrap w-100">
                            <span class="input-group-text">
                                <i class="fa-solid fa-lock"></i>
                            </span>
                            <div class="position-relative w-100">
                                <input type="password" class="form-control w-100" id="senha" name="senha" placeholder="Senha">
                                <i class="fa-regular fa-eye-slash position-absolute top-0 end-0" style="margin: 0.7rem 0.7rem 0 0; cursor: pointer;" data-bs-toggle="tooltip" title="Mostrar senha"></i>
                            </div>
                        </div>
                        <small class="txt-qk-verm d-none" data-validar="senha"></small>
                    </div>

                    <div class="d-flex align-items-center w-100">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="lembrar" name="lembrar" value="1">
                            <label class="form-check-label" for="lembrar">
                                Lembrar de mim
                            </label>
                        </div>
                        <div class="form-check">
                            <a href="">
                                Esqueci minha senha
                            </a>
                        </div>
                    </div>

                    <button type="submit" id="entrar" class="qk-btn qk-btn-princ w-100 fw-bold" style="height: 3rem;">
                        Entrar
                    </button>
                    <button type="button" id="entrarGoogle" class="qk-btn qk-btn-princ-outline gap-2 w-100" style="height: 3rem;">
                        <img src="/img/svg/google_logo.svg" alt="logo_google" style="aspect-ratio: 1; height: 100%;">
                        <span>
                            Entrar com o Google
                        </span>
                    </button>
                </form>
                <div class="w-100 text-start" style="font-size: 0.875rem;">
                    Novo por aqui? <a href="">Registre-se!</a>
                </div>
            </div>
        </div>
    </body>

</html>
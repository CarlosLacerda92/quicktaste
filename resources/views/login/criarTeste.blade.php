<?php

?>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>QuickTaste</title>
    </head>

    <body>
        <form action="/criarTeste" method="POST">
            @csrf
            <input type="text" name="nome" placeholder="nome" />
            <input type="text" name="email" placeholder="email" />
            <input type="password" name="senha" placeholder="senha" />
            <button>
                Criar
            </button>
        </form>
    </body>

</html>
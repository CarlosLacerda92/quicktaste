document.addEventListener("DOMContentLoaded", (event) => {

    document.getElementById('formlogin').addEventListener('submit', function(e) {
        e.preventDefault();
        validar(this);
    });

    document.getElementById('passwordEye').addEventListener('click', function(e) {
        exibirSenha(this);
    });

    document.querySelectorAll('#email, #password').forEach(function(elem) {
        elem.addEventListener('input', function() {
            resetarCampo(elem);
        });
    });
});

function validar(form) {
    
    const email = document.getElementById('email');
    const senha = document.getElementById('password');

    const valorEmail = email.value.trim();
    const valorSenha = senha.value.trim();

    if (!valorEmail || !/^[a-z0-9.]{1,64}@[a-z0-9.]{1,64}$/i.test(valorEmail)) {
        campoInvalido(email, 'Por favor, informe um e-mail válido.');
        return false;
    }

    if (!valorSenha) {
        campoInvalido(senha, 'Por favor, informe sua senha.');
        return false;
    }

    form.submit();
}

function resetarCampo(campo) {
    const name = campo.name;
    const erro = document.querySelector(`small[data-validar="${name}"]`);

    campo.classList.remove('form-control-invalid');

    erro.innerHTML = '';
    erro.classList.add('d-none');
}

function campoInvalido(campo, msg) {
    const name = campo.name;
    const erro = document.querySelector(`small[data-validar="${name}"]`);

    campo.classList.add('form-control-invalid');

    erro.innerHTML = msg;
    erro.classList.remove('d-none');

    campo.focus();
}

function exibirSenha(elem) {

    let input = elem.previousElementSibling;
    
    if (input.type === 'password') {
        input.type = 'text';
        elem.classList.remove('fa-eye-slash');
        elem.classList.add('fa-eye');
    }
    else {
        input.type = 'password';
        elem.classList.remove('fa-eye');
        elem.classList.add('fa-eye-slash');
    }
}
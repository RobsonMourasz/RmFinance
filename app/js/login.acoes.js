(() => {

    document.getElementById('login-form').addEventListener('submit', async (event) => {
        event.preventDefault();

        const loginForm = document.getElementById('email').value;
        const PasswordForm = document.getElementById('senha').value;

        if (loginForm.length < 1) {
            document.getElementById('alerta-email').innerText = 'O campo email é obrigatório.';

            document.getElementById('alerta-email').classList.add('error');
            setTimeout(() => {
                document.getElementById('alerta-email').innerText = '';
                document.getElementById('alerta-email').classList.remove('error');
            }, 3000);
            return
        }

        if (PasswordForm.length < 4) {
            document.getElementById('alerta-senha').innerText = 'O senha é menor que 4 digitos.';

            document.getElementById('alerta-senha').classList.add();
            document.getElementById('alerta-senha').classList.add('error');
            setTimeout(() => {
                document.getElementById('alerta-senha').innerText = '';
                document.getElementById('alerta-senha').classList.remove('error');
            }, 3000);
            return;
        }

        const data = new FormData();
        data.append('email', loginForm);
        data.append('senha', PasswordForm);
        data.append('request', 'login');
        const verificar = await fetch('src/route.php', {
            method: 'POST',
            body: data,
        });

        const resposta = await verificar.json();
        if (resposta.status === 'success') {
            if ( resposta.message == 'autorizado' ){
                location.assign("public/index.php");
            }
        }

        if (resposta.status === 'error') {
            if (resposta.message === 'email incorreto') {
                document.getElementById('alerta-email').classList.add('error');
                document.getElementById('alerta-email').innerText = 'Email incorreto ou não cadastrado.';
                setTimeout(() => {
                    document.getElementById('alerta-email').innerText = '';
                    document.getElementById('alerta-email').classList.remove('error');
                }, 3000);
            } else if (resposta.message === 'senha incorreta') {
                document.getElementById('alerta-senha').classList.add('error');
                document.getElementById('alerta-senha').innerText = 'Senha incorreta.';
                setTimeout(() => {
                    document.getElementById('alerta-senha').innerText = '';
                    document.getElementById('alerta-senha').classList.remove('error');
                }, 3000);
            }
        }
    });

})()




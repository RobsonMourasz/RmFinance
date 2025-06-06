(()=>{

    /* ACIONA O MODAL BASTA ADICIONAR DENTRO DO BOTAO O ATRIBUTO mostrar-modal="id_do_modal" */
    document.querySelectorAll('[mostrar-modal]').forEach(button => {
        button.addEventListener('click', function() {
            let modalName = this.getAttribute('mostrar-modal');
            document.getElementById(modalName).classList.add('is-active');
        });
    });

    /* OCULTA O MODAL BASTA ADICIONAR DENTRO DO BOTAO O ATRIBUTO ocultar-modal="id_do_modal" */
    document.querySelectorAll('[ocultar-modal]').forEach(button => {
        button.addEventListener('click', function() {
            let modalName = this.getAttribute('ocultar-modal');
            document.getElementById(modalName).classList.remove('is-active');
        });
    });
    
    /* OCULTA O MODAL AO CLICAR FORA DO MODAL */
    document.querySelectorAll('.container-modal').forEach(background => {
        background.addEventListener('click', function() {
            this.classList.remove('is-active');
        });
    });

})();
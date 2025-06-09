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
            let modal = document.getElementById(modalName);
            
            // Seleciona todos os inputs e textareas dentro do modal e limpa seus valores
            modal.querySelectorAll('input, select, textarea').forEach(field => {
                if (field.type === 'checkbox' || field.type === 'radio') {
                    field.checked = false; // Desmarca caixas de seleção e botões de opção
                } else {
                    field.value = ''; // Limpa outros campos
                }
            });
    
            modal.classList.remove('is-active');
        });
    });

    const data = document.querySelectorAll('.data-now');
    if (!data){
        return
    } else{
        data.forEach(element => {
            const formattedDate = getDataAgora();
            element.value = formattedDate;
        });
    }


})();

function getDataAgora() {
    const data = new Date();
    const dia = String(data.getDate()).padStart(2, '0');
    const mes = String(data.getMonth() + 1).padStart(2, '0'); // Meses começam do zero
    const ano = data.getFullYear();
    return `${ano}-${mes}-${dia}`;

}
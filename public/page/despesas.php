<div class="content">
    <div class="header">
        <h1>Despesas</h1>
        <p>Sistema / <span style="font-weight: 600;">Despesas</span> </p>
    </div>
</div>

<div class="content">
    <div> <button class="btn bg-danger" mostrar-modal="nome_modal">Cadastrar</button> </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Data</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <!-- Exemplo de linha de tabela -->
                <tr>
                    <td>1</td>
                    <td>Aluguel</td>
                    <td>R$ 1.200,00</td>
                    <td>01/10/2023</td>
                    <td>
                        <button class=" btn-table bg-transparent-dark"><i class="bi bi-pencil-square" style="color: #494949;"></i></button>
                        <button class=" btn-table bg-transparent-dark"><i class="bi bi-trash-fill" style="color: #494949;"></i></button>
                    </td>
                </tr>
                <!-- Mais linhas podem ser adicionadas aqui -->
            </tbody>
        </table>
    </div> <!-- table-responsive -->
</div> <!-- content-->

<div class="container-modal" id="nome_modal">

    <div class="modal" >
        <div class="modal-header">
            <h2>Cadastro de Despesas</h2>
            <button class="btn bg-transparent-dark" ocultar-modal="nome_modal">&times;</button>
        </div>

        <div class="modal-body">
            <form>
                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição</label>
                    <input type="text" class="form-control" id="descricao" placeholder="Digite a descrição da despesa">
                </div>
                <div class="col">
                    <div class="row">
                        <div class="mb-3">
                            <label for="valor" class="form-label">Valor</label>
                            <input type="number" class="form-control" id="valor" placeholder="Digite o valor da despesa">
                        </div>
                        <div class="mb-3">
                            <label for="data" class="form-label">Data</label>
                            <input type="date" class="form-control" id="data">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn bg-success">Salvar</button>
            </form>
        </div>

        <div class="modal-footer">
            <button class="btn bg-transparent-dark" ocultar-modal="nome_modal">Fechar</button>
        </div>
    </div>

</div> <!-- FIM container-modal -->
<?php
require_once __DIR__ . '/../../src/seguranca.php'; // Verifica se o usuário está logado
?>

<div class="content">
    <div class="header">
        <h1>Despesas</h1>
        <p>Sistema / <span style="font-weight: 600;">Despesas</span> </p>
    </div>
</div>

<div class="content">
    <div> <button class="btn bg-danger" mostrar-modal="modal-cadastrar-despesa">Cadastrar</button> </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Pago</th>
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
                    <td class="bg-title-danger">N</td>
                    <td>01/10/2023</td>
                    <td>
                        <button class=" btn-table bg-transparent-dark" mostrar-modal="modal-editar-despesa"><i class="bi bi-pencil-square" style="color: #494949;"></i></button>
                        <button class=" btn-table bg-transparent-dark" mostrar-modal="modal-excluir-despesa"><i class="bi bi-trash-fill" style="color: #494949;"></i></button>
                    </td>
                </tr>
                <!-- Mais linhas podem ser adicionadas aqui -->
            </tbody>
        </table>
        <div class="table-footer">
            <div class="table-footer-td">
                <p>Total aberto: <span class="text-danger">R$ 1.200,00</span></p>
            </div>
            <div class="table-footer-td">
                <p>Total pago: <span class="text-success">R$ 0,00</span></p>
            </div>
            <div class="table-footer-td">
                <p>Total: <span class="text-warning">R$ 1.200,00</span></p>
            </div>
        </div>
    </div> <!-- table-responsive -->
</div> <!-- content-->

<div class="container-modal" id="modal-cadastrar-despesa">

    <div class="modal">
        <div class="modal-header">
            <div class="title">
                <h2>Cadastro de Despesas</h2>
            </div>
            <div class="btn-fechar">
                <button class="btn bg-transparent-dark" ocultar-modal="modal-cadastrar-despesa">&times;</button>
            </div>
        </div>

        <div class="modal-body">
            <form>
                <div class="mb-3">
                    <label for="cad_descricao" class="form-label">Descrição</label>
                    <input type="text" class="form-control" id="cad_descricao" placeholder="Digite a descrição da despesa" name="descricao">
                </div>

                <div class="mb-3">
                    <label for="categoria" class="form-label">Categoria</label>
                    <select name="categoria" id="cad_categoria" class="form-control" name="categoria">
                        <option value="">Selecione ---</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="cad_documento" class="form-label">Documento</label>
                    <input type="text" class="form-control" id="cad_documento" name="documento">
                </div>

                <div class="col">
                    <div class="row">
                        <div class="mb-3">
                            <label for="cad_valor_total" class="form-label">Valor</label>
                            <input type="number" class="form-control" id="cad_valor_total" placeholder="Digite o valor da despesa" name="valor_total">
                        </div>
                        <div class="mb-3">
                            <label for="cad_data_vencimento" class="form-label">Data</label>
                            <input type="date" class="form-control data-now" id="cad_data_vencimento" name="data_vencimento">
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="row justify-content-center">
                        <div class="mb-3 form-check">
                            <label for="cad_pago" class="switch form-label">
                                <input type="checkbox" class="form-check-input " id="cad_pago" name="pago" value="1">
                                <span class="slider"></span>
                                Pago
                            </label>
                        </div>

                        <div class="mb-3 form-check">
                            <label for="cad_parcelar" class="switch form-label">
                                <input type="checkbox" class="form-check-input " id="cad_parcelar" name="parcelar" value="1">
                                <span class="slider"></span>
                                Parcelar
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="parcelas" class="form-label">Parcelas</label>
                    <input type="number" class="form-control" id="parcelas" name="parcelas" placeholder="Quantidade de parcelas">
                    <div class="col">
                        <div class="row justify-content-start">
                            <div class="mb-3 justify-content-start">
                                <label for="parcelar-valor" class="form-label">Por valor </label>
                                <input type="radio" name="valor" id="parcelar-valor" checked>
                            </div>
                            <div class="mb-3 justify-content-start">
                                <label for="parcelar-parcelas" class="form-label">Por parcelas </label>
                                <input type="radio" name="valor" id="parcelar-parcelas">
                            </div>
                        </div>
                    </div>

                </div>

            </form>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn bg-success">Salvar</button>
            <button type="submit" class="btn bg-success">Salvar + </button>
            <button class="btn bg-transparent-dark" ocultar-modal="modal-cadastrar-despesa">Fechar</button>
        </div>
    </div>

</div> <!-- FIM container-modal -->

<div class="container-modal" id="modal-editar-despesa">

    <div class="modal">
        <div class="modal-header">
            <div class="title">
                <h2>Editar Despesa</h2>
            </div>
            <div class="btn-fechar">
                <button class="btn bg-transparent-dark" ocultar-modal="modal-editar-despesa">&times;</button>
            </div>
        </div>

        <div class="modal-body">
            <form>
                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição</label>
                    <input type="text" class="form-control" id="edt_descricao" name="descricao">
                </div>

                <div class="mb-3">
                    <label for="categoria" class="form-label">Categoria</label>
                    <select name="categoria" id="edt_categoria" class="form-control">
                        <option value="">Selecione ---</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="edt_documento" class="form-label">Documento</label>
                    <input type="text" class="form-control" id="edt_documento" name="documento">
                </div>

                <div class="col">
                    <div class="row">
                        <div class="mb-3">
                            <label for="edt_valor_total" class="form-label">Valor</label>
                            <input type="number" class="form-control" id="edt_valor_total">
                        </div>
                        <div class="mb-3">
                            <label for="edt_data_vencimento" class="form-label">Data</label>
                            <input type="date" class="form-control" id="edt_data_vencimento">
                        </div>
                        <div class="mb-3 form-check justify-content-center">
                            <label for="edt_pago" class="switch form-label">
                                <input type="checkbox" class="form-check-input " id="edt_pago" name="pago" value="1">
                                <span class="slider"></span>
                                Pago
                            </label>
                        </div>
                    </div>
                </div>

                
            </form>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn bg-info">Editar</button>
            <button class="btn bg-transparent-dark" ocultar-modal="modal-cadastrar-despesa">Fechar</button>
        </div>
    </div>

</div> <!-- FIM container-modal -->

<div class="container-modal" id="modal-excluir-despesa">

    <div class="modal">
        <div class="modal-header">
            <div class="title">
                <h2>Realmente desja excluir essa despesa?</h2>
            </div>
            <div class="btn-fechar">
                <button class="btn bg-transparent-dark" ocultar-modal="modal-excluir-despesa">&times;</button>
            </div>
        </div>

        <div class="modal-body">
            <form>
                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição</label>
                    <input type="text" class="form-control" id="descricao" placeholder="Digite a descrição da despesa">
                </div>
                <button type="submit" class="btn bg-danger">Sim</button>
            </form>
        </div>

        <div class="modal-footer">
            <button class="btn bg-transparent-dark" ocultar-modal="modal-excluir-despesa">Fechar</button>
        </div>
    </div>

</div> <!-- FIM container-modal -->
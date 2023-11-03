<section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">


        <fieldset class="scheduler-border">
            <legend class="scheduler-border py-4 text-center">Adicionar itens na cotação <b>n°
                    <?= $cotacoes["id"] ?>
                </b></legend>


            <?php if (isset($cotacao)): ?>
                <form action="<?= base_url() ?>cotacoes/update/<?= $cotacoes['id'] ?>" method="post">
                <?php else: ?>
                    <form action="<?= base_url() ?>cotacoes/cadastro_cotacao_fornecedor/<?= $cotacoes['id'] ?>" method="post">
                    <?php endif; ?>



                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <!-- Email input -->

                            <table class="table justify-content-center border border-secondary text-center">
                                <thead class="table-primary ">
                                    <tr>
                                        <th scope="col">Nome</th>
                                        <th scope="col">CNPJ</th>
                                        <th scope="col">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php foreach ($fornecedores_cotacao as $f_cotacao): ?>
                                            <td>
                                                <?= $f_cotacao["nome"] ?>
                                            </td>
                                            <td>
                                                <?= $f_cotacao["cnpj"] ?>
                                            </td>
                                            <td>
                                                <div class="col">
                                                    <a class="btn btn-primary btn-sm"
                                                        href="<?= base_url() ?>fornecedores/edit/<?= $f_cotacao['id'] ?>">
                                                        <i class="bi bi-pencil"></i>
                                                    </a>

                                                    <a class="btn btn-danger btn-sm"
                                                        href="javascript:goDelete(<?= $f_cotacao['id'] ?>)">
                                                        <i class="bi bi-trash"></i>
                                                    </a>
                                                </div>
                                            </td>

                                        <?php endforeach; ?>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="form-outline text-center">
                                <label class="form-label" for="form8Example2">Fornecedor</label>

                                <select class="form-select" name="fk_fornecedor" required>
                                    <option selected disabled value="" hidden>Escolha uma opção</option>
                                    <?php foreach ($fornecedores as $fornecedor): ?>
                                        <option value="<?= $fornecedor["id"] ?>">
                                            <?= $fornecedor["nome"] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="form-text">Escolha um fornecedor por vez e adicione.</div><br>


                                <button type="submit" class="btn btn-success">
                                    <i class="bi bi-plus"></i>
                                    Adicionar
                                </button>

                                <a href="<?= base_url() ?>cotacoes/painel/<?= $cotacoes['id'] ?>" type="reset"
                                    class="btn btn-secondary"><i class="bi bi-arrow-left"></i>
                                    Voltar</a>
                            </div>
                        </div>

                    </div>









                </form>









    </div>
</section>
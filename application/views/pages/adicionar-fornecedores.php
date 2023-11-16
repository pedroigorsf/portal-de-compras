

<section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

        <fieldset class="scheduler-border">
            <legend class="scheduler-border py-4 text-center">Adicionar itens na cotação <b>n°
                    <?= $cotacoes["id"] ?>
                </b></legend>

            <?php if (isset($cotacao)): ?>
                <form action="<?= base_url() ?>cotacoes/update/<?= $cotacoes['id'] ?>" method="post">
                <?php else: ?>
                    <form action="<?= base_url() ?>cotacoes/cadastro_cotacao_fornecedor/<?= $cotacoes['id'] ?>"
                        method="post">
                    <?php endif; ?>

                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">















                            <div class="d-flex form-inline">

                                <table class="table table-light">
                                    <thead>
                                        <tr>
                                            <td class="col-sm-11">
                                                Fornecedor
                                            </td>

                                            <td class="col-sm-1">
                                            </td>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <select class="form-select" name="fk-fornecedores" required>
                                                    <option value="" selected disabled hidden>
                                                        Escolha uma opção
                                                    </option>
                                                    <?php foreach ($fornecedores as $fornecedor): ?>
                                                        <?php if ($fornecedor["stats"]): ?>
                                                            <option value="<?= $fornecedor["id"] ?>">
                                                                <?= $fornecedor["nome"] ?>
                                                            </option>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <button type="submit" class="btn btn-success text-center">
                                                    <i class="bi bi-plus"></i>
                                                </button>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>


                            <div class="row col-sm">
                                <p class="text-center">
                                    Escolha um fornecedor por vez e adicione.
                                </p>
                            </div>
                            <br><br>


                            <table class="table justify-content-center border border-info">
                                <thead class="table-primary">
                                    <tr>
                                        <th scope="col" class="col-sm-7">Nome</th>
                                        <th scope="col" class="col-sm-4">CNPJ</th>
                                        <th scope="col" class="col-sm-1 text-center">Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($fornecedores_cotacao): ?>
                                        <?php foreach ($fornecedores_cotacao as $f_cotacao): ?>

                                            <tr>

                                                <td>
                                                    <?= $f_cotacao["nome"] ?>
                                                </td>
                                                <td>
                                                    <?= $f_cotacao["cnpj"] ?>
                                                </td>
                                                <td>
                                                    <div class="col-sm text-center">

                                                        <a class="btn btn-danger btn-sm"
                                                            href="javascript:goDelete(<?= $f_cotacao['id'] ?>)">
                                                            <i class="bi bi-trash"></i>
                                                        </a>

                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="2" class="text-center">Nenhum fornecedor cadastrado</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>


                            <a href="<?= base_url() ?>cotacoes/painel/<?= $cotacoes['id'] ?>" type="reset"
                                class="btn btn-secondary btn-sm"><i class="bi bi-arrow-left"></i>
                                Voltar</a>
                        </div>
                    </div>
    </div>
    </form>
    </div>
</section>





<script>
    function goDelete(id) {
        var myUrl = '<?= base_url(); ?>cotacoes/deletar_fornecedor_cotacao/'
            + <?= $cotacoes["id"] ?> + '/'
            + id
        if (confirm("Deseja remover este fornecedor da cotação?")) {
            window.location.href = myUrl;
        } else {
            return false;
        }
    }
</script>
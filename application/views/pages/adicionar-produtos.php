<section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">


        <?php

        // print_r($this->session->teste);
        // exit;
        
        ?>

        <fieldset class="scheduler-border">
            <legend class="scheduler-border py-4 text-center">Adicionar itens na cotação <b>n°
                    <?= $cotacoes["id"] ?>
                </b></legend>







            <?php if (isset($cotacao)): ?>
                <form action="<?= base_url() ?>cotacoes/update/<?= $cotacoes['id'] ?>" method="post">
                <?php else: ?>
                    <form action="<?= base_url() ?>cotacoes/cadastro_cotacao_produto/<?= $cotacoes['id'] ?>" method="post">
                    <?php endif; ?>

                    <div class="row  justify-content-center">
                        <div class="col-sm-8">


                            <div class="d-flex form-inline">

                                <table class="table table-light">
                                    <thead>
                                        <tr>
                                            <td class="col-sm-6">
                                                Produtos
                                            </td>
                                            <td class="col-sm-1">
                                                Quant.
                                            </td>
                                            <td class="col-sm-1">
                                                UDM
                                            </td>
                                            <td class="col-sm-2">
                                                Preço
                                            </td>
                                            <td class="col-sm-1">
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    

                                        <tr>
                                            <td>
                                                <select class="form-select" name="fk-produtos"  data-show-subtext="true" data-live-search="true" required>
                                                    <option value="" selected disabled hidden>
                                                        Escolha uma opção
                                                    </option>
                                                    <?php foreach ($produtos as $produto): ?>

                                                        <option value="<?= $produto["id"] ?>">
                                                            <?= $produto["nome"] ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" 
                                                    data-mask="00000" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input class="form-control" value="un" required disabled>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control"
                                                    data-mask="R$ 000,000" required>
                                                </div>
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
                                    Escolha um produto por vez e adicione.
                                </p>
                            </div>


                            <br><br>


                            <table class="table border border-info">
                                <thead class="table-primary">
                                    <tr>
                                        <th scope="col" class="col-sm-6">Nome</th>
                                        <th scope="col" class="col-sm-2">Quant.</th>
                                        <th scope="col" class="col-sm-2">Preço</th>
                                        <th scope="col" class="col-sm-1 text-center">Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($produtos_cotacao): ?>
                                        <?php foreach ($produtos_cotacao as $p_cotacao): ?>

                                            <tr>

                                                <td>
                                                    <?= $p_cotacao["nome"] ?>
                                                </td>
                                                <td>1</td>
                                                <td>R$ 0,00</td>
                                                <td>
                                                    <div class="col-sm text-center">

                                                        <a class="btn btn-danger btn-sm"
                                                            href="javascript:goDelete(<?= $p_cotacao['id'] ?>)">
                                                            <i class="bi bi-trash"></i>
                                                        </a>

                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="4" class="text-center">Nenhum produto cadastrado</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>

                            <a href="<?= base_url() ?>cotacoes/painel/<?= $cotacoes['id'] ?>" type="reset"
                                class="btn btn-secondary btn-sm col-sm"><i class="bi bi-arrow-left"></i>
                                Voltar</a>


                        </div>
                    </div>
                </form>
    </div>
</section>

<script>
    function goDelete(id) {
        var myUrl = '<?= base_url(); ?>cotacoes/deletar_produto_cotacao/'
            + <?= $cotacoes["id"] ?> + '/'
            + id
        if (confirm("Deseja apagar esse registro?")) {
            window.location.href = myUrl;
        } else {
            return false;
        }
    }

</script>
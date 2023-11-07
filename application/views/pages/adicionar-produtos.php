<section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

        <fieldset class="scheduler-border">
            <legend class="scheduler-border py-4 text-center">Adicionar itens na cotação <b>n°
                    <?= $cotacoes["id"] ?>
                </b></legend>

            <?php if (isset($cotacao)): ?>
                <form action="<?= base_url() ?>cotacoes/update/<?= $cotacoes['id'] ?>" method="post">
                <?php else: ?>
                    <form action="<?= base_url() ?>cotacoes/cadastro_cotacao_produto/<?= $cotacoes['id'] ?>" method="post">
                    <?php endif; ?>

                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6">

                            <table class="table justify-content-center">
                                <thead class="table-primary">
                                    <tr>
                                        <th scope="col" class="col-sm-11">Nome</th>
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
                                            <td colspan="2" class="text-center">Nenhum produto cadastrado</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>

                            <div class="form-outline text-center">
                                <label class="form-label" for="form8Example2">Produtos</label>

                                <select class="form-select" name="fk-produtos" required>
                                    <option selected disabled hidden>Escolha uma opção</option>
                                    <?php foreach ($produtos as $produto): ?>
                                        <?php
                                        // Adicione a condição na view para verificar se a opção já foi selecionada.
                                        $opcaoJaSelecionada = false; // Inicializa como falso
                                        if (isset($opcao) && $opcao == $produto["id"]) {
                                            $opcaoJaSelecionada = true;
                                        }
                                        ?>
                                        <option value="<?= $produto["id"] ?>" <?= $opcaoJaSelecionada ? 'disabled' : '' ?>>
                                            <?= $produto["nome"] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>

                                <div class="row">
                                    <?php
                                    // Adicione a mensagem de erro na view com base na condição.
                                    if ($opcaoJaSelecionada) {
                                        echo '<p class="text-center">
                                                Esta opção já foi selecionada. Escolha outra opção.
                                                </p>';
                                    } else {
                                        echo '<p class="text-center">
                                                Escolha um produto por vez e adicione.
                                              </p>';
                                    }
                                    ?>
                                </div>



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

<script>
    function goDelete(id) {
        var myUrl = '<?= base_url();?>cotacoes/deletar_produto_cotacao/'
            + <?= $cotacoes["id"] ?> + '/'
            + id
        if (confirm("Deseja apagar esse registro?")) {
            window.location.href = myUrl;
        } else {
            return false;
        }
    }

</script>
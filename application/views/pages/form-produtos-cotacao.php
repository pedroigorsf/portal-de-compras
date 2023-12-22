<section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

        <fieldset class="scheduler-border">

            <legend class="py-1 text-center text-uppercase text-bg-primary rounded">
                Cadastrar preços
            </legend>

            <?php if (isset($produto)): ?>
            <form action="<?= base_url() ?>produtos/update/<?= $produto['id'] ?>" method="post">
                <?php else: ?>
                <form action="<?= base_url() ?>produtos/cadastro" method="post">
                    <?php endif; ?>

                    <div class="">
                        <div class="col">
                            <div class="card card-registration my-5">
                                <div class="">

                                    <div class="">

                                        <div class="d-flex flex-wrap justify-content-center">


                                            <?php foreach($produtos_cotacao as $p_cotacao) :?>

                                            <div class="card form-inline col-md-5 m-3">
                                                <h5 class="card-header">
                                                    <?php echo $p_cotacao['nome']; ?>
                                                </h5>

                                                <table class="table table-borderless">
                                                    <thead>
                                                        <tr>
                                                            <td class="col-sm">
                                                                Preço
                                                            </td>
                                                            <td class="col-sm">
                                                                Quant.
                                                            </td>
                                                            <td class="col-sm">
                                                                UDM
                                                            </td>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div>
                                                                    <input type="text" name="preco" class="form-control"
                                                                        data-mask="00000" required>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <input type="text" name="quantidade"
                                                                        class="form-control" data-mask="00000" required
                                                                        disabled>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <input class="form-control" value="Unidade" required
                                                                        disabled>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <?php endforeach ?>






                                        </div>










                                        <div class="d-flex justify-content-end m-3">
                                            <a href="<?= base_url() ?>produtos" class="btn btn-light btn-md">
                                                Cancelar
                                            </a>
                                            <button type="submit" class="btn btn-primary btn-md ms-2">
                                                Salvar
                                            </button>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

    </div>
</section>
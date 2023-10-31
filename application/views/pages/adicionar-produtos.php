<section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

        <fieldset class="scheduler-border">
            <legend class="scheduler-border py-4">Requisitar uma nova cotação</legend>



            <?php if (isset($cotacao)): ?>
                <form action="<?= base_url() ?>cotacoes/update/<?= $cotacao['id'] ?>" method="post">
                <?php else: ?>
                    <form action="<?= base_url() ?>cotacoes/cadastro" method="post">
                    <?php endif; ?>



                    <div class="row">
                    <div class="col-sm">
                            <!-- Email input -->
                            <div class="form-outline">
                                <label class="form-label" for="form8Example2">Solicitante</label>
                                <input type="text" name="fk_solicitante" id="fk_solicitante" class="form-control"
                                value="<?= isset($cotacao) ? $cotacao["fk_solicitante"] : ""; ?>" disabled/>
                                <div class="form-text">Responsável pela requisição de compra.</div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <!-- Email input -->
                            <div class="form-outline">
                                <label class="form-label" for="form8Example2">Solicitação</label>
                                <input type="text" name="solicitacao" id="solicitacao" class="form-control"
                                    value="<?= isset($cotacao) ? $cotacao["solicitacao"] : ""; ?>" />
                                <div class="form-text">Motivo da solicitação referente a cotação.</div>
                            </div>
                        </div>

                    </div>
                    <div class="row py-4">

                        <div class="col-sm-3">
                            <!-- Name input -->
                            <div class="form-outline">
                                <label class="form-label" for="form8Example3">Data inicial</label>
                                <input type="date" name="data_inicial" id="data_inicial" class="form-control"
                                    value="<?= isset($cotacao) ? $cotacao['data_inicial'] : ""; ?>" placeholder="" />
                                <div class="form-text">Período inicial da cotação.</div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <!-- Name input -->
                            <div class="form-outline">
                                <label class="form-label" for="form8Example4">Data final</label>
                                <input type="date" name="data_final" id="data_final" class="form-control"
                                    value="<?= isset($cotacao) ? $cotacao['data_final'] : ""; ?>" placeholder="" />
                                <div class="form-text">Período final da cotação.</div>

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- Name input -->
                            <div class="form-outline">
                                <label class="form-label" for="form8Example4">Aprovador</label>
                                <input type="text" name="fk_aprovador" id="fk_aprovador" class="form-control"
                                    value="<?= isset($cotacao) ? $cotacao['fk_aprovador'] : ""; ?>" placeholder="" disabled/>
                                <div class="form-text">Responsável pela aprovação</div>

                            </div>
                        </div>

                    </div>

        </fieldset>

        <div class="col py-5">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <button type="reset" class="btn btn-danger">Limpar</button>
        </div>
        </form>

    </div>




    </div>
</section>
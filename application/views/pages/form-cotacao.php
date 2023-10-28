<section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

        <fieldset class="scheduler-border">
            <legend class="scheduler-border py-4">Requisitar uma nova cotação</legend>

            <form action="<?= base_url() ?>cotacoes/cadastro" method="post">
                <div class="row">
                <div class="col-sm">
                    <!-- Name input -->
                    <div class="form-outline">
                    <label class="form-label" for="form8Example4">Categoria</label>
                        <select class="form-select" aria-label="Default select example" required>
                            <option selected>Escolher solicitante</option>
                            <?php foreach($solicitantes as $solicitante):?>
                            <option value="1"><?= $solicitante['nome']?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="form-text">Responsável pela cotação.</div>
                    </div>
                </div>
                    <div class="col-sm-8">
                        <!-- Email input -->
                        <div class="form-outline">
                            <label class="form-label" for="form8Example2">Solicitação</label>
                            <input type="text" name="solicitacao" id="solicitacao" class="form-control"/>
                            <div class="form-text">Motivo da solicitação referente a cotação.</div>
                        </div>
                    </div>

                </div>
                <div class="row py-4">

                    <div class="col-sm-3">
                        <!-- Name input -->
                        <div class="form-outline">
                            <label class="form-label" for="form8Example3">Data inicial</label>
                            <input type="date" name="data_inicial" id="data_inicial" class="form-control" placeholder=""/>
                            <div class="form-text">Período inicial da cotação.</div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <!-- Name input -->
                        <div class="form-outline">
                            <label class="form-label" for="form8Example4">Data final</label>
                            <input type="date" name="data_final" id="data_final" class="form-control" placeholder="" />
                            <div class="form-text">Período final da cotação.</div>

                        </div>
                    </div>

                    <div class="form-outline col-sm">
                    <label class="form-label" for="form8Example4">Categoria</label>
                        <select class="form-select" aria-label="Default select example" required>
                            <option selected>Escolher solicitante</option>
                            <?php foreach($aprovadores as $aprovador):?>
                            <option value="2"><?= $aprovador['nome']?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="form-text">Responsável pela aprovação.</div>
                    </div>
                    
                </div>

        </fieldset>

        <div class="col py-5">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-danger">Limpar</button>
        </div>
        </form>

    </div>




    </div>
</section>
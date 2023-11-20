<section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

        <fieldset class="scheduler-border">
            <legend class="scheduler-border py-2"></legend>
            <?php if (isset($produto)): ?>
                <legend class="py-1 text-center text-uppercase text-bg-primary rounded">
                    Alterar cotação
                </legend>
            <?php else: ?>
                <legend class="py-1 text-center text-uppercase text-bg-primary rounded">
                    Cadastrar uma nova cotação
                </legend>
            <?php endif; ?>



            <?php if (isset($cotacao)): ?>
                <form action="<?= base_url() ?>cotacoes/update/<?= $cotacao['id'] ?>" method="post">
                <?php else: ?>
                    <form action="<?= base_url() ?>cotacoes/cadastro" method="post">
                    <?php endif; ?>








                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col">
                            <div class="card card-registration my-5">
                                <div class="row g-0">
                                    <div class="col-xl-2 d-none d-xl-block">
                                        <img src="<?= base_url() ?>assets/img/cotacao.jpg" alt="Sample photo"
                                            class="img-fluid"
                                            style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                                    </div>
                                    <div class="col-xl-10">
                                        <div class="card-body p-md-4 text-black">


                                            <?php if (isset($cotacao)): ?>
                                                <div class="row">
                                                    <div class="d-md-flex justify-content-start align-items-center mb-1">

                                                        <h6 class="mb-0 me-1">Status* </h6>

                                                        <div class="form-check form-check-inline mb-0 me-4">
                                                            <input class="form-check-input" type="radio" name="stats"
                                                                id="femaleGender" value="1" <?= $cotacao['stats'] == 1 ? 'checked' : ""; ?> required />
                                                            <label class="form-check-label" for="femaleGender">Ativo</label>
                                                        </div>

                                                        <div class="form-check form-check-inline mb-0 me-4">
                                                            <input class="form-check-input" type="radio" name="stats"
                                                                id="maleGender" value="0" <?= $cotacao['stats'] == 0 ? 'checked' : ""; ?> required />
                                                            <label class="form-check-label" for="maleGender">Inativo</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                            <div class="row">
                                                <div class="col-md-4 mb-2">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form3Example1m">
                                                            Requisitante*
                                                        </label>
                                                        <input type="text" id="form3Example1m" name="nome"
                                                            class="form-control form-control-lg text-uppercase"
                                                            value="<?= isset($solicitantes) ? $solicitantes["nome"] : ""; ?>"
                                                            disabled required
                                                            oninput="this.value = this.value.toUpperCase()" />

                                                    </div>
                                                </div>


                                                <div class="col-md-8 mb-2">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form3Example1m">
                                                            Descrição*
                                                        </label>
                                                        <input type="text" id="form3Example1m" name="solicitacao"
                                                            class="form-control form-control-lg"
                                                            value="<?= isset($cotacao) ? $cotacao["solicitacao"] : ""; ?>"
                                                            required oninput="this.value = this.value.toUpperCase()" />

                                                    </div>
                                                </div>


                                            </div>

                                            <div class="row">
                                                <div class="col-md-3 mb-2">
                                                    <div class="form-outline">
                                                        <label class="form-label"
                                                            for="form3Example1m1">Centro de Custo*</label>
                                                        <input type="text" id="form3Example1m1"
                                                            class="form-control form-control-lg text-uppercase"
                                                            name="cc" id="cc"
                                                            value=""
                                                            required />

                                                    </div>
                                                </div>

                                                <div class="col-md-3 mb-2">
                                                    <div class="form-outline">
                                                        <label class="form-label"
                                                            for="form3Example1m1">Aprovador*</label>
                                                        <input type="text" id="form3Example1m1"
                                                            class="form-control form-control-lg text-uppercase"
                                                            name="udm" id="UDM"
                                                            value="<?= isset($aprovadores) ? $aprovadores["nome"] : ""; ?>"
                                                            disabled required />

                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form8Example3">
                                                            Data inicial*
                                                        </label>
                                                        <input type="date" name="data_inicial" id="data_inicial"
                                                            class="form-control form-control-lg"
                                                            value="<?= isset($cotacao) ? $cotacao['data_inicial'] : ""; ?>"
                                                            placeholder="" required />
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form8Example4">
                                                            Data final*
                                                        </label>
                                                        <input type="date" name="data_final" id="data_final"
                                                            class="form-control form-control-lg"
                                                            value="<?= isset($cotacao) ? $cotacao['data_final'] : ""; ?>"
                                                            placeholder="" required />
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="d-flex justify-content-end pt-3">

                                                <a href="<?= base_url() ?>cotacoes" class="btn btn-light btn-md">
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




    </div>
</section>
<section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

        <fieldset class="scheduler-border">
            <?php if (isset($produto)): ?>
                <legend class="py-1 text-center text-uppercase text-bg-primary rounded">
                    Alterar produto
                </legend>
            <?php else: ?>
                <legend class="py-1 text-center text-uppercase text-bg-primary rounded">
                    Cadastrar um novo produto
                </legend>
            <?php endif; ?>

            <?php if (isset($produto)): ?>
                <form action="<?= base_url() ?>produtos/update/<?= $produto['id'] ?>" method="post">
                <?php else: ?>
                    <form action="<?= base_url() ?>produtos/cadastro" method="post">
                    <?php endif; ?>

                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col">
                            <div class="card card-registration my-5">
                                <div class="row g-0">
                                    <div class="col-xl-2 d-none d-xl-block">
                                        <img src="<?= base_url() ?>assets/img/produto.jpg" alt="Sample photo"
                                            class="img-fluid"
                                            style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                                    </div>
                                    <div class="col-xl-10">
                                        <div class="card-body p-md-5 text-black">


                                            <?php if (isset($produto)): ?>
                                                <div class="row">
                                                    <div class="d-md-flex justify-content-start align-items-center mb-4">

                                                        <h6 class="mb-0 me-4">Status* </h6>

                                                        <div class="form-check form-check-inline mb-0 me-4">
                                                            <input class="form-check-input" type="radio" name="stats"
                                                                id="femaleGender" value="1" <?= $produto['stats'] == 1 ? 'checked' : ""; ?> required />
                                                            <label class="form-check-label" for="femaleGender">Ativo</label>
                                                        </div>

                                                        <div class="form-check form-check-inline mb-0 me-4">
                                                            <input class="form-check-input" type="radio" name="stats"
                                                                id="maleGender" value="0" <?= $produto['stats'] == 0 ? 'checked' : ""; ?> required />
                                                            <label class="form-check-label" for="maleGender">Inativo</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                            <div class="row">
                                                <div class="col-md-8 mb-4">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form3Example1m">
                                                            Produto*
                                                        </label>
                                                        <input type="text" id="form3Example1m" name="nome"
                                                            class="form-control form-control-lg"
                                                            value="<?= isset($produto) ? $produto["nome"] : ""; ?>"
                                                            required oninput="this.value = this.value.toUpperCase()" />

                                                    </div>
                                                </div>

                                                <div class="col-md-4 mb-4">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form3Example1m1">Unidade de Medida*</label>
                                                        <input type="text" id="form3Example1m1"
                                                            class="form-control form-control-lg text-uppercase" name="udm" id="udm"
                                                            class="form-control"
                                                            value="<?= isset($produto) ? $produto["udm"] : ""; ?>" required oninput="this.value = this.value.toUpperCase()"
                                                            required />

                                                    </div>
                                                </div>
                                            </div>
                                            


                                            <div class="d-flex justify-content-end pt-3">
                                            <a href="<?= base_url() ?>produtos" class="btn btn-light btn-md">
                                                    Cancelar
                                                </a>
                                                <button type="submit"
                                                    class="btn btn-primary btn-md ms-2">Salvar</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

    </div>
</section>
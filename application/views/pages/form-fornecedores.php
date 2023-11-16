<section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

        <fieldset class="scheduler-border">
            <?php if (isset($fornecedor)): ?>
                <legend class="py-1 text-center text-uppercase text-bg-primary rounded">Alterar empresa</legend>
            <?php else: ?>
                <legend class="py-1 text-center text-uppercase text-bg-primary rounded">Cadastrar uma nova empresa</legend>
            <?php endif; ?>


            <?php if (isset($fornecedor)): ?>
                <form action="<?= base_url() ?>fornecedores/update/<?= $fornecedor['id'] ?>" method="post">
                <?php else: ?>
                    <form action="<?= base_url() ?>fornecedores/cadastro" method="post">
                    <?php endif; ?>



                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col">
                            <div class="card card-registration my-5">
                                <div class="row g-0">
                                    <div class="col-xl-4 d-none d-xl-block">
                                        <img src="<?= base_url() ?>assets/img/empresa.jpg" alt="Sample photo"
                                            class="img-fluid"
                                            style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                                    </div>
                                    <div class="col-xl-8">
                                        <div class="card-body p-md-5 text-black">


                                            <?php if (isset($fornecedor)): ?>
                                                <div class="row">
                                                    <div class="d-md-flex justify-content-start align-items-center mb-4">

                                                        <h6 class="mb-0 me-4">Status* </h6>

                                                        <div class="form-check form-check-inline mb-0 me-4">
                                                            <input class="form-check-input" type="radio" name="stats"
                                                                id="femaleGender" value="1" <?= $fornecedor['stats'] == 1 ? 'checked' : ""; ?> required />
                                                            <label class="form-check-label" for="femaleGender">Ativo</label>
                                                        </div>

                                                        <div class="form-check form-check-inline mb-0 me-4">
                                                            <input class="form-check-input" type="radio" name="stats"
                                                                id="maleGender" value="0" <?= $fornecedor['stats'] == 0 ? 'checked' : ""; ?> required />
                                                            <label class="form-check-label" for="maleGender">Inativo</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                            <div class="row">
                                                <div class="col-md-12 mb-4">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form3Example1m">Razão
                                                            Social*</label>
                                                        <input type="text" id="form3Example1m" name="nome"
                                                            class="form-control form-control-lg"
                                                            value="<?= isset($fornecedor) ? $fornecedor["nome"] : ""; ?>"
                                                            required oninput="this.value = this.value.toUpperCase()" />

                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form3Example1n">CNPJ*</label>
                                                        <input type="text" id="form3Example1n"
                                                            class="form-control form-control-lg" name="cnpj" id="cnpj"
                                                            maxlength="14" size="18" data-mask="00.000.000/0000-00"
                                                            value="<?= isset($fornecedor) ? $fornecedor["cnpj"] : ""; ?>"
                                                            required />

                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-4">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form3Example1m1">CEP*</label>
                                                        <input type="text" id="form3Example1m1"
                                                            class="form-control form-control-lg" name="cep" id="cep"
                                                            class="form-control" size="10" maxlength="9"
                                                            data-mask="00.000/000" onblur="pesquisacep(this.value);"
                                                            value="<?= isset($fornecedor) ? $fornecedor["cep"] : ""; ?>"
                                                            required />

                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">

                                                <div class="col-md-10 mb-4">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form3Example1n1">Rua*</label>
                                                        <input type="text" id="rua"
                                                            class="form-control form-control-lg text-uppercase"
                                                            name="endereco"
                                                            value="<?= isset($fornecedor) ? $fornecedor["endereco"] : ""; ?>"
                                                            required oninput="this.value = this.value.toUpperCase()"
                                                            required <?= isset($fornecedor) ? 'disabled' : '' ?> />

                                                    </div>
                                                </div>

                                                <div class="col-md-2 mb-4">
                                                    <label class="form-label" for="form3Example8">Número*</label>
                                                    <input type="text" id="numero"
                                                        class="form-control form-control-lg text-uppercase"
                                                        name="numero"
                                                        value="<?= isset($fornecedor) ? $fornecedor["numero"] : ""; ?>"
                                                        oninput="this.value = this.value.toUpperCase()" required
                                                        <?= isset($fornecedor) ? 'disabled' : '' ?> />

                                                </div>
                                            </div>


                                            <div class="row">

                                                <div class="col-md-5 mb-4">
                                                    <label class="form-label" for="form3Example9">Bairro*</label>
                                                    <input type="text" id="bairro"
                                                        class="form-control form-control-lg text-uppercase"
                                                        name="bairro"
                                                        value="<?= isset($fornecedor) ? $fornecedor["bairro"] : ""; ?>"
                                                        oninput="this.value = this.value.toUpperCase()" required
                                                        <?= isset($fornecedor) ? 'disabled' : '' ?> />
                                                </div>

                                                <div class="col-md-5 mb-4">
                                                    <label class="form-label" for="form3Example9">Cidade*</label>
                                                    <input type="text" id="cidade"
                                                        class="form-control form-control-lg text-uppercase"
                                                        name="cidade"
                                                        value="<?= isset($fornecedor) ? $fornecedor["cidade"] : ""; ?>"
                                                        oninput="this.value = this.value.toUpperCase()" required
                                                        <?= isset($fornecedor) ? 'disabled' : '' ?> />
                                                </div>

                                                <div class="col-md-2 mb-4">
                                                    <label class="form-label" for="form3Example9">UF*</label>
                                                    <input type="text" id="uf"
                                                        class="form-control form-control-lg text-uppercase"
                                                        name="estado"
                                                        value="<?= isset($fornecedor) ? $fornecedor["estado"] : ""; ?>"
                                                        oninput="this.value = this.value.toUpperCase()" required
                                                        <?= isset($fornecedor) ? 'disabled' : '' ?> />
                                                </div>

                                            </div>

                                            <div class="row">

                                                <div class="col-md-8 mb-4">
                                                    <label class="form-label" for="form3Example9">E-mail*</label>
                                                    <input type="email" id="form3Example9"
                                                        class="form-control form-control-lg" name="email"
                                                        value="<?= isset($fornecedor) ? $fornecedor["email"] : ""; ?>"
                                                        oninput="this.value = this.value.toUpperCase()" required
                                                        <?= isset($fornecedor) ? 'disabled' : '' ?> />
                                                </div>

                                                <div class="col-md-4 mb-4">
                                                    <label class="form-label" for="form3Example9">Senha*</label>
                                                    <input type="password" id="form3Example9"
                                                        class="form-control form-control-lg" name="senha"
                                                        value="<?= isset($fornecedor) ? $fornecedor["senha"] : ""; ?>"
                                                        oninput="this.value = this.value.toUpperCase()" required
                                                        <?= isset($fornecedor) ? 'disabled' : '' ?> />
                                                </div>
                                            </div>



                                            <div class="d-flex justify-content-end pt-3">
                                                <a href="<?= base_url() ?>fornecedores" class="btn btn-light btn-md">
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
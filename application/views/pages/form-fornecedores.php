<section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

        <fieldset class="scheduler-border">
            <legend class="scheduler-border py-2">Cadastrar uma nova empresa</legend>

            
            <?php if (isset($fornecedor)): ?>
                <form action="<?= base_url() ?>fornecedores/update/<?= $fornecedor['id'] ?>" method="post">
                <?php else: ?>
                    <form action="<?= base_url() ?>fornecedores/cadastro" method="post">
                    <?php endif; ?>

                <div class="row">
                    <div class="col-sm-7">
                        <!-- Name input -->
                        <div class="form-outline">
                            <label class="form-label" for="form8Example1">Razão Social</label>
                            <input type="text" name="nome" id="form8Example1" class="form-control" 
                            value="<?= isset($fornecedor) ? $fornecedor["nome"] : "";?>" required oninput="this.value = this.value.toUpperCase()"/>
                            <div class="form-text">Informar a Razão Social da empresa</div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <!-- Email input -->
                        <div class="form-outline">
                            <label class="form-label" for="form8Example2">CNPJ</label>
                            <input type="text" name="cnpj" id="cnpj" class="form-control" maxlength="14" size="18"
                                data-mask="00.000.000/0000-00" onblur="pesquisacnpj(this.value);" 
                                value="<?= isset($fornecedor) ? $fornecedor["cnpj"] : "";?>" required />
                            <div class="form-text">Informar o CNPJ completo</div>
                        </div>
                    </div>
                    <div class="col">
                        <!-- Email input -->
                        <div class="form-outline">
                            <label class="form-label" for="form8Example5">CEP</label>
                            <input type="text" name="cep" id="cep" class="form-control" size="10" maxlength="9" data-mask="00.000/000"
                                onblur="pesquisacep(this.value);" 
                                value="<?= isset($fornecedor) ? $fornecedor["cep"] : "";?>" required/>
                            <div class="form-text">Informar apenas números</div>

                        </div>
                    </div>
                </div>
                <div class="row py-2">

                    <div class="col-sm-5">
                        <!-- Name input -->
                        <div class="form-outline">
                            <label class="form-label" for="form8Example3">Rua</label>
                            <input type="text" name="endereco" id="rua" class="form-control text-uppercase" placeholder="" 
                                value="<?= isset($fornecedor) ? $fornecedor["endereco"] : "";?>" required oninput="this.value = this.value.toUpperCase()"/>

                        </div>
                    </div>
                    <div class="col-sm-3">
                        <!-- Name input -->
                        <div class="form-outline">
                            <label class="form-label" for="form8Example4">Bairro</label>
                            <input type="text" name="bairro" id="bairro" class="form-control text-uppercase" placeholder="" 
                                value="<?= isset($fornecedor) ? $fornecedor["bairro"] : "";?>" required oninput="this.value = this.value.toUpperCase()"/>

                        </div>
                    </div>
                    <div class="col-sm-3">
                        <!-- Name input -->
                        <div class="form-outline">
                            <label class="form-label" for="form8Example4">Cidade</label>
                            <input type="text" name="cidade" id="cidade" class="form-control text-uppercase" placeholder="" 
                                value="<?= isset($fornecedor) ? $fornecedor["cidade"] : "";?>" required oninput="this.value = this.value.toUpperCase()"/>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <!-- Name input -->
                        <div class="form-outline">
                            <label class="form-label" for="form8Example4">UF</label>
                            <input type="text" name="estado" id="uf" class="form-control text-uppercase" 
                                value="<?= isset($fornecedor) ? $fornecedor["estado"] : "";?>" required oninput="this.value = this.value.toUpperCase()"/>
                        </div>
                    </div>
                </div>

        </fieldset>

        <br>

        <!--
        <fieldset class="scheduler-border">
            <legend class="scheduler-border">Informações de acesso</legend>

            <div class="row">
                <div class="col-sm-7">
                    <div class="form-outline">
                        <label class="form-label" for="form8Example1">E-mail</label>
                        <input type="email" name="email" id="form8Example1" class="form-control" placeholder="" />
                        <div class="form-text">Informar o e-mail corporativo</div>

                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-outline">
                        <label class="form-label" for="form8Example2">Senha</label>
                        <input type="password" name="senha" id="form8Example2" class="form-control" placeholder="" />
                        <div class="form-text">Informar o e-mail corporativo</div>
                    </div>
                </div>
            </div>
        </fieldset>
                -->

        <div class="col py-5">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="<?=base_url()?>fornecedores" class="btn btn-danger">Cancelar</a>
        </div>
        </form>

    </div>




    </div>
</section>
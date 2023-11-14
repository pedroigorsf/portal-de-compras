<section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

        <?php
        // if (!empty($_SESSION['mensageria'])){
        //     echo $_SESSION['mensageria'];
        //     exit;
        // }
        ?>

        <fieldset class="scheduler-border">
        <?php if (isset($fornecedor)): ?>
            <legend class="scheduler-border py-2">Alterar produto</legend>
            <?php else: ?>
                <legend class="scheduler-border py-2">Cadastrar um novo produto</legend>
                <?php endif; ?>

            <?php if (isset($produto)): ?>
                <form action="<?= base_url() ?>produtos/update/<?= $produto['id'] ?>" method="post">
                <?php else: ?>
                    <form action="<?= base_url() ?>produtos/cadastro" method="post">
                    <?php endif; ?>

                    <div class="row">
                        <?php if (isset($produto)): ?>
                            <div class="col-sm-2">
                                <label class="form-label" for="form8Examp">Status</label><br>

                                <input type="radio" value="1" class="btn-check btn w-100" name="stats" id="success-outlined"
                                    autocomplete="off" <?= $produto['stats'] == 1 ? 'checked' : ""; ?>>
                                <label class="btn btn-outline-success btn" for="success-outlined">Ativo</label>

                                <input type="radio" value="0" class="btn-check btn w-100" name="stats" id="danger-outlined"
                                    autocomplete="off" <?= $produto['stats'] == 0 ? 'checked' : ""; ?>>
                                <label class="btn btn-outline-danger btn" for="danger-outlined">Inativo</label>
                            </div>
                        <?php endif; ?>

                        <div class="col-sm-7">
                            <!-- Name input -->
                            <div class="form-outline">
                                <label class="form-label" for="form8Example1">Nome</label>
                                <input type="text" name="nome" id="form8Example1" class="text-uppercase form-control"
                                    value="<?= isset($produto) ? $produto["nome"] : ""; ?>"
                                    oninput="this.value = this.value.toUpperCase()" required />
                                <div class="form-text">Qual o nome do produto que deseja cadastrar?</div>

                            </div>
                        </div>

                        <!-- <div class="col-sm">
                            
                            <div class="form-outline">
                                <label class="form-label" for="form8Example4">UDM</label>
                                <select class="form-select" name="categoria" aria-label="Default select example"
                                    placeholder="Escolha uma opção" required>

                                    <option value="" disabled selected hidden>Selecione uma opção</option>



                                </select>



                                <div class="form-text">Unidade de Medida.</div>
                            </div>
                        </div> -->


                        <div class="col-sm-3">
                            <!-- Name input -->
                            <div class="form-outline">
                                <label class="form-label" for="form8Example3">Marca</label>
                                <input type="text" name="marca" id="form8Example3" class="text-uppercase form-control"
                                    value="<?= isset($produto) ? $produto["marca"] : ""; ?>" required
                                    oninput="this.value = this.value.toUpperCase()" />
                                <div class="form-text">Qual a marca?</div>

                            </div>
                        </div>

        </fieldset>


        <div class="col py-5">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="<?= base_url() ?>produtos" class="btn btn-danger">Cancelar</a>
        </div>

        </form>

    </div>




    </div>
</section>
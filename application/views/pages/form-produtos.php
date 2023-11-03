<section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">


        <fieldset class="scheduler-border">
            <legend class="scheduler-border">Cadastrar um novo produto</legend>

            <?php if (isset($produto)): ?>
                <form action="<?= base_url() ?>produtos/update/<?= $produto['id'] ?>" method="post">
                <?php else: ?>
                    <form action="<?= base_url() ?>produtos/cadastro" method="post">
                    <?php endif; ?>

                    <div class="row">
                        <div class="col-sm-8">
                            <!-- Name input -->
                            <div class="form-outline">
                                <label class="form-label" for="form8Example1">Nome</label>
                                <input type="text" name="nome" id="form8Example1" class="form-control"
                                    value="<?= isset($produto) ? $produto["nome"] : ""; ?>" />
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


                        <div class="col-sm-4">
                            <!-- Name input -->
                            <div class="form-outline">
                                <label class="form-label" for="form8Example3">Marca</label>
                                <input type="text" name="marca" id="form8Example3" class="form-control"
                                    value="<?= isset($produto) ? $produto["marca"] : ""; ?>" />
                                <div class="form-text">Qual a marca?</div>

                            </div>
                        </div>

        </fieldset>


        <div class="col py-5">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="<?=base_url()?>produtos" class="btn btn-danger">Cancelar</a>
        </div>

        </form>

    </div>




    </div>
</section>
<section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">


        <fieldset class="scheduler-border">
            <legend class="scheduler-border py-4 text-center">Adicionar itens na cotação <b>n°
                    <?= $cotacoes["id"] ?>
                </b></legend>


            <?php if (isset($cotacao)): ?>
                <form action="<?= base_url() ?>cotacoes/update/<?= $cotacao['id'] ?>" method="post">
                <?php else: ?>
                    <form action="<?= base_url() ?>cotacoes/cadastro" method="post">
                    <?php endif; ?>



                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6">
                            <!-- Email input -->
                            
                            <table class="table justify-content-center">
                                <thead class="table-primary">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">CNPJ</th>
                                        <th scope="col">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php foreach($cotacoes as $cotacao) ?>
                                        <td><?=$cotacoes["id"]?></td>
                                        <td><?=$cotacoes["fk_fornecedor"]?></td>
                                        <td>x</td>
                                        <td>x</td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="form-outline text-center">
                                <label class="form-label" for="form8Example2">Fornecedor</label>

                                <select class="form-select" required>
                                    <option selected disabled value="" hidden>Escolha uma opção</option>
                                    <?php foreach ($fornecedores as $fornecedor): ?>
                                        <option value="<?= $fornecedor["id"] ?>">
                                            <?= $fornecedor["nome"] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="form-text">Escolha um fornecedor por vez e adicione.</div><br>


                                <a href="<?= base_url() ?>cotacao_fornecedor/<?=$cotacoes['id']?>" type="submit" class="btn btn-success"><i
                                        class="bi bi-plus"></i>
                                    Adicionar</a>
                                <a href="<?= base_url() ?>cotacoes/" type="reset" class="btn btn-secondary"><i
                                        class="bi bi-arrow-left"></i>
                                    Voltar</a>
                            </div>
                        </div>

                    </div>









                </form>









    </div>
</section>
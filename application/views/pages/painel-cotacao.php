<section id="faq" class="faq section-bg">
  <div class="container" data-aos="fade-up" id="conteudo">
    <div class="container">
      <h4>Pedido de Compra n°
        <?= $cotacoes["id"]; ?>
      </h4>
      <b>Solicitação:</b>
      <?= $cotacoes["solicitacao"]; ?><br>
      <b>Período:</b>
      <?php
      $data_formatada = date('d/m/Y', strtotime($cotacoes['data_inicial']));
      echo $data_formatada;
      ?> à
      <?php
      $data_formatada = date('d/m/Y', strtotime($cotacoes['data_final']));
      echo $data_formatada;
      ?>
      <div class="row d-flex py-4">

        <!-- TABELA DE FORNECEDORES - LADO ESQUERDO-->
        <div class="col">
          <?php if (isset($cotacao)): ?>
            <form action="<?= base_url() ?>cotacoes/update/<?= $cotacoes['id'] ?>" method="post">
            <?php else: ?>
              <form action="<?= base_url() ?>cotacoes/cadastro_cotacao_fornecedor/<?= $cotacoes['id'] ?>" method="post">
              <?php endif; ?>


              <div class="row justify-content-center">
                <div>

                  <table class="table justify-content-center border border-info">
                    <thead>
                      <tr>
                        <td colspan="4" class="text-center text-light bg-primary">
                          <a href="<?= base_url() ?>cotacoes/adicionar_fornecedores/<?= $cotacoes["id"] ?>"
                            class="text-light">
                            <i class="bi bi-gear"></i>
                            Fornecedores</a>
                        </td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if ($fornecedores_cotacao): ?>
                        <?php foreach ($fornecedores_cotacao as $f_cotacao): ?>
                          <tr>
                            <td>
                              <i class="bi bi-circle-fill text-info"></i>
                              <?= $f_cotacao["nome"] ?>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      <?php else: ?>
                        <tr>
                          <td colspan="2" class="text-center">Nenhum fornecedor cadastrado</td>
                        </tr>
                      <?php endif; ?>
                    </tbody>
                  </table>

                </div>
              </div>
            </form>
        </div>


        <!-- TABELA DE PRODUTOS - LADO DIREITO-->
        <div class="col">
          <?php if (isset($cotacao)): ?>
            <form action="<?= base_url() ?>cotacoes/update/<?= $cotacoes['id'] ?>" method="post">
            <?php else: ?>
              <form action="<?= base_url() ?>cotacoes/cadastro_cotacao_produto/<?= $cotacoes['id'] ?>" method="post">
              <?php endif; ?>

              <div class="row justify-content-center">
                <div>



                  <table class="table border border-info">
                    <thead>
                      <tr>
                        <td colspan="4" class="text-center text-light bg-primary">
                          <a href="<?= base_url() ?>cotacoes/adicionar_produtos/<?= $cotacoes["id"] ?>"
                            class="text-light">
                            <i class="bi bi-gear"></i>
                            Produtos</a>
                        </td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if ($produtos_cotacao): ?>
                        <?php foreach ($produtos_cotacao as $p_cotacao): ?>
                          <tr>
                            <td>
                              <i class="bi bi-circle-fill text-info"></i>
                              <?= $p_cotacao["nome"] ?>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      <?php else: ?>
                        <tr>
                          <td colspan="4" class="text-center">Nenhum produto cadastrado</td>
                        </tr>
                      <?php endif; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </form>

        </div>
      </div>
    </div>


    <div class="row">

      <div class="col">
        <h4>Cotação:</h4>
















        <?php if ($produtos_cotacao): ?>
          <?php foreach ($produtos_cotacao as $p): ?>
            <div class="table-responsive">
              <table class="table text-left border border-info table-hover table-borderless">
                <thead class="table-info text-bg-info">
                  <tr>
                    <th class="col-sm bg-primary text-white" scope="col" colspan="6">Produto:
                      <?= $p['nome']; ?>
                  </tr>
                  <tr>
                    <th class="col-sm-1 bg-info bg-gradient text-white">#</th>
                    <th class="col-sm-7 bg-info bg-gradient text-white" scope="col">Fornecedor</th>
                    <th class="col-sm-1 bg-info bg-gradient text-white" scope="col">Status</th>
                    <th class="col-sm-1 bg-info bg-gradient text-white" scope="col">Quant.</th>
                    <th class="col-sm-1 bg-info bg-gradient text-white" scope="col">Preço</th>
                    <th class="col-sm-1 bg-info bg-gradient text-white" scope="col">Total</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($fornecedores_cotacao as $f): ?>
                    <tr>
                      <td class="text-center bg-muted">
                        <div class="form-check text-center">
                          <input class="form-check-input text-center bg-gradient" type="radio" name="<?= $p['nome']; ?>"
                            id="<?= $p['nome']; ?>">
                        </div>
                      </td>
                      <td>
                        <?= $f['nome']; ?>
                      </td>
                      <td><i class="bi bi-circle-fill text-success"></i></td>
                      <td>
                        <?= $p['quantidade']; ?>
                      </td>
                      <td>R$ 0,00</td>
                      <td>R$ 0,00</td>
                    </tr>
                  <?php endforeach; ?>

                </tbody>
              </table>
            </div>
            <hr class="py-2">
          <?php endforeach; ?>
        <?php else: ?>
          <table class="table text-left border border-info table-hover table-borderless">
            <thead class="table-primary bg-primary">
              <tr>
                <th class="col-sm-1 bg-primary bg-gradient text-white">#</th>
                <th class="col-sm-7 bg-primary bg-gradient text-white" scope="col">Fornecedor</th>
                <th class="col-sm-1 bg-primary bg-gradient text-white" scope="col">Status</th>
                <th class="col-sm-1 bg-primary bg-gradient text-white" scope="col">Quant.</th>
                <th class="col-sm-1 bg-primary bg-gradient text-white" scope="col">Preço</th>
                <th class="col-sm-1 bg-primary bg-gradient text-white" scope="col">Total</th>
              </tr>
            </thead>

            <tbody>
              <tr class="text-center">
                <td colspan="6">Nenhum produto foi cadastrado na cotação.</td>
              </tr>
            </tbody>
          </table>


        <?php endif; ?>


        <div class="row">
          <div class="col">
            <!-- Button trigger modal -->
            <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              <i class="bi bi-cart-check"></i> Enviar para aprovação</button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
              aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                  </div>
                </div>
              </div>
            </div>



            <a href="<?= base_url() ?>cotacoes/" class="btn btn-secondary btn-sm">
              <i class="bi bi-arrow-left"></i> Voltar</a>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
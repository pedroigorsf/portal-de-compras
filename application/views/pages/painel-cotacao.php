<section id="faq" class="faq section-bg">
  <div class="container" data-aos="fade-up" id="conteudo">

    <!-- <div class="position-relative m-4">
      <div class="progress" style="height: 1px;">
        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0"
          aria-valuemax="100"></div>
      </div>
      <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill"
        style="width: 2rem; height:2rem;">1</button>
      <button type="button"
        class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill"
        style="width: 2rem; height:2rem;">2</button>
      <button type="button"
        class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill"
        style="width: 2rem; height:2rem;">3</button>
    </div> -->



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


      <div class="row py-4">

        <div class="col">
          <a href="<?= base_url() ?>cotacoes/adicionar_fornecedores/<?= $cotacoes["id"] ?>"
            class="btn btn-primary btn-sm">
            <i class="bi bi-gear"></i>
            Fornecedores</a>

          <a href="<?= base_url() ?>cotacoes/adicionar_produtos/<?= $cotacoes["id"] ?>" class="btn btn-primary btn-sm">
            <i class="bi bi-gear"></i>
            Produtos</a>
        </div>
      </div>
    </div>





    <section>
      <div class="container">
        <div class="row">

          <div class="col">
            <h4>Cotação:</h4>


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
                            <input class="form-check-input text-center bg-gradient" type="radio" name="flexRadioDefault"
                              id="flexRadioDefault1">
                          </div>
                        </td>
                        <td>
                          <?= $f['nome']; ?>
                        </td>
                        <td><i class="bi bi-circle-fill text-secondary"></i></td>
                        <td>1</td>
                        <td>R$ 0,00</td>
                        <td>R$ 0,00</td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <hr class="py-2">
            <?php endforeach; ?>


          </div>

          <div class="row">
            <div class="col">

              <button class="btn btn-success btn-sm" id="gerarPDF">
                <i class="bi bi-cart-check"></i> Finalizar pedido de compra</button>

              <a href="<?= base_url() ?>cotacoes/" class="btn btn-secondary btn-sm">
                <i class="bi bi-arrow-left"></i> Voltar</a>

            </div>
          </div>
        </div>

      </div>
    </section>


  </div>
</section>

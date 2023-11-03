<section id="faq" class="faq section-bg">
  <div class="container" data-aos="fade-up">

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


          
            <div class="container col-sm-6 bg-primary rounded text-light text-center">
              <h3>Pedido de Compra n°
                <?= $cotacoes["id"]; ?>
              </h3>
            </div>
         

      <section id="counts" class="counts">
        <div class="container">

          <div class="row justify-content-center text-center">


                <div class="col-5">
                  <h4>Fornecedores</h4>
                  <a href="<?= base_url() ?>cotacoes/adicionar_fornecedores/<?= $cotacoes["id"] ?>"
                    class="btn btn-primary btn-sm">Adicionar fornecedor</a>

                </div>


                <div class="col-5">
                  <h4>Produtos</h4>
                  <a href="<?= base_url() ?>cotacoes/adicionar_produtos/<?= $cotacoes["id"] ?>"
                    class="btn btn-primary btn-sm">Adicionar produto</a>
                    
                </div>


          </div>

        </div>
      </section>

    <section>
      <div class="container">
        <div class="row">

          <div class="col">
            <h4>Respostas:</h4>

            <table class="table table-bordered border-primary">
              <thead class="table-primary">
                <tr>
                  <th class="col-sm" scope="col" colspan="2">Produto:

                  </th>
                </tr>
              </thead>
            </table>


            <table class="table text-center table-bordered border-dark">
              <thead class="table-primary">
                <tr>
                  <th class="col-sm-0 table-dark">#</th>
                  <th class="col-sm-6 table-dark" scope="col">Fornecedores</th>
                  <th class="col-sm-1 table-dark" scope="col">Status</th>
                  <th class="col-sm-1 table-dark" scope="col">Quantidade</th>
                  <th class="col-sm-2 table-dark" scope="col">Preços</th>
                  <th class="col-sm-2 table-dark" scope="col">Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>

                  <td class="table-primary table-dark">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    </div>
                  </td>
                  <td>EMPRESA LTDA</td>
                  <td>x</td>
                  <td>10</td>
                  <td>R$ 1,99</td>
                  <td>R$ 19,99</td>

                </tr>

                <tr>

                  <td class="table-primary table-dark">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    </div>
                  </td>
                  <td>EMPRESA LTDA</td>
                  <td>x</td>
                  <td>10</td>
                  <td>R$ 1,99</td>
                  <td>R$ 19,99</td>

                </tr>

                <tr>

                  <td class="table-primary table-dark">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    </div>
                  </td>
                  <td>EMPRESA LTDA</td>
                  <td>x</td>
                  <td>10</td>
                  <td>R$ 1,99</td>
                  <td>R$ 19,99</td>

                </tr>

              </tbody>
            </table>











          </div>

          <div class="row">
            <div class="col">

              <a href="<?= base_url() ?>cotacoes/adicionar_fornecedores/<?= $cotacoes["id"] ?>"
                class="btn btn-success btn-sm">
                <i class="bi bi-cart-check"></i> Finalizar pedido de compra</a>

              <a href="<?= base_url() ?>cotacoes/" class="btn btn-secondary btn-sm">
                <i class="bi bi-arrow-left"></i> Voltar</a>

            </div>
          </div>
        </div>

      </div>
    </section>


  </div>
</section>
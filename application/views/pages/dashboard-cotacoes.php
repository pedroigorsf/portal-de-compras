<section id="faq" class="faq section-bg">
  <div class="container" data-aos="fade-up">


    <table class="table border border-info">
      <thead class="thead-dark table-primary">
        <tr>
          <th scope="col" class="col-sm-2">Cotação</th>
          <th scope="col" class="col-sm-9">Solicitação</th>
          <th scope="col" class="col-sm-1">Status</th>
        </tr>
      </thead>
      <tbody>
        <?php if ($cotacoes): ?>
          <?php foreach ($cotacoes as $cotacao): ?>
            <tr>
              <td>

                <a class="btn btn-primary btn-sm" href="<?= base_url() ?>cotacoes/painel/<?= $cotacao['id'] ?>">
                  Cotação n°
                  <?= $cotacao['id']; ?>
                </a>
              </td>
              <td>
                <?= $cotacao['solicitacao']; ?>
              </td>

              <!-- <td>
                <?php
                $data_formatada = date('d/m/Y', strtotime($cotacao['data_inicial']));
                echo $data_formatada;
                ?>
              </td>
              <td>
                <?php
                $data_formatada = date('d/m/Y', strtotime($cotacao['data_final']));
                echo $data_formatada;
                ?>
              </td> -->

              <td>
                <button class="btn btn-success btn-sm active">Aprovado</button>
              </td>

            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="5" class="text-center">Nenhum pedido de compra cadastrado</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>

    <a href="<?= base_url() ?>cotacoes/novo" class="btn btn-outline-primary">Adicionar um novo pedido</a>


  </div>
</section>
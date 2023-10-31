<section id="faq" class="faq section-bg">
  <div class="container" data-aos="fade-up">


    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col" class="col-sm">#</th>
          <th scope="col" class="col-sm-4">Solicitação</th>
          <th scope="col" class="col-sm-2">Solicitante</th>
          <th scope="col" class="col-sm-2">Data inicial</th>
          <th scope="col" class="col-sm-2">Data final</th>
          <th scope="col" class="col-sm-2">Cotação</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($cotacoes as $cotacao): ?>
          <tr>
            <td>
              <?= $cotacao['id']; ?>
            </td>
            <td>
              <?= $cotacao['solicitacao']; ?>
            </td>
            <td>
              <?= $cotacao['fk_solicitante']; ?>
            </td>
            <td>
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
            </td>

            <td>
              <div class="col">
                <a class="btn btn-primary" href="<?= base_url() ?>cotacoes/painel/<?= $cotacao['id'] ?>">
                  <i class="bi bi-plus"></i> Acessar
                </a>
              </div>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>


  </div>
</section>
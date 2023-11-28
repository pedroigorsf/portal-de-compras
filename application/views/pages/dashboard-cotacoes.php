<section id="faq" class="faq section-bg">
  <div class="container" data-aos="fade-up">

    <?php if ($this->session->flashdata('success')): ?>
      <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong><i class="bi bi-check-circle-fill"></i></strong> Registro cadastrado com sucesso!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif ?>

    <?php if ($this->session->flashdata('updated')): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><i class="bi bi-wrench-adjustable-circle-fill"></i></strong> Registro atualizado com sucesso!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif ?>

    <?php if ($this->session->flashdata('error')): ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong><i class="bi bi-exclamation-circle-fill"></i></strong> É necessário preencher todos os campos.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif ?>






    <?php if (permission()['tipo'] == "Fornecedor"): ?>

      <table class="table border border-info">
        <thead class="thead-dark table-primary">
          <tr>
            <th scope="col" class="col-sm-2">Cotação</th>
            <th scope="col" class="col-sm-8">Solicitação</th>
            <th scope="col" class="col-sm-1">Status</th>
          </tr>
        </thead>
        <tbody>
          <?php if ($cotacoes): ?>
            <?php foreach ($cotacoes as $cotacao): ?>
              <?php if ($cotacao['status'] == "Informado"): ?>
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
                    <?php if ($cotacao['status'] == 'Informado'): ?>
                      <button class="btn btn-primary btn-sm w-100" disabled>Informado</button>
                    <?php endif; ?>
                    <?php if ($cotacao['status'] == 'Aprovado'): ?>
                      <button class="btn btn-success btn-sm w-100" disabled>Aprovado</button>
                    <?php endif; ?>
                    <?php if ($cotacao['status'] == 'Reprovado'): ?>
                      <button class="btn btn-danger btn-sm w-100" disabled>Reprovado</button>
                    <?php endif; ?>
                  </td>

                </tr>
              <?php endif; ?>
            <?php endforeach; ?>
          <?php else: ?>
            <tr>
              <td colspan="5" class="text-center">Nenhum pedido de compra cadastrado</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>


    <?php elseif (permission()['tipo'] == "aprovador"): ?>

      <table class="table border border-info">
        <thead class="thead-dark table-primary">
          <tr>
            <th scope="col" class="col-sm-2">Cotação</th>
            <th scope="col" class="col-sm-8">Solicitação</th>
            <th scope="col" class="col-sm-1">Status</th>
          </tr>
        </thead>
        <tbody>
          <?php if ($cotacoes): ?>
            <?php foreach ($cotacoes as $cotacao): ?>
              <?php if ($cotacao['status'] == "Informado"): ?>
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
                    <?php if ($cotacao['status'] == 'Informado'): ?>
                      <button class="btn btn-primary btn-sm w-100" disabled>Informado</button>
                    <?php endif; ?>
                    <?php if ($cotacao['status'] == 'Aprovado'): ?>
                      <button class="btn btn-success btn-sm w-100" disabled>Aprovado</button>
                    <?php endif; ?>
                    <?php if ($cotacao['status'] == 'Reprovado'): ?>
                      <button class="btn btn-danger btn-sm w-100" disabled>Reprovado</button>
                    <?php endif; ?>
                  </td>

                </tr>
              <?php endif; ?>
            <?php endforeach; ?>
          <?php else: ?>
            <tr>
              <td colspan="5" class="text-center">Nenhum pedido de compra cadastrado</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>






    <?php elseif (permission()['tipo'] == "solicitante"): ?>

      <table class="table border border-info">
        <thead class="thead-dark table-primary">
          <tr>
            <th scope="col" class="col-sm-2">Cotação</th>
            <th scope="col" class="col-sm-8">Solicitação</th>
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
                  <?php if ($cotacao['status'] == 'Informado'): ?>
                    <button class="btn btn-primary btn-sm w-100" disabled>Informado</button>
                  <?php endif; ?>
                  <?php if ($cotacao['status'] == 'Aprovado'): ?>
                    <button class="btn btn-success btn-sm w-100" disabled>Aprovado</button>
                  <?php endif; ?>
                  <?php if ($cotacao['status'] == 'Reprovado'): ?>
                    <button class="btn btn-danger btn-sm w-100" disabled>Reprovado</button>
                  <?php endif; ?>
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

    <?php endif; ?>

    <?php if (permission()['tipo'] == "solicitante"): ?>
      <a href="<?= base_url() ?>cotacoes/novo" class="btn btn-outline-primary">Adicionar um novo pedido</a>
    <?php endif; ?>

  </div>
</section>
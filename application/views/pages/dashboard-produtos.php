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

    <?php if ($this->session->flashdata('duplicated')): ?>
      <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong><i class="bi bi-info-circle-fill"></i></strong> ERRO: O produto informado já existe.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif ?>

    <?php if ($this->session->flashdata('error')): ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong><i class="bi bi-exclamation-circle-fill"></i></strong> É necessário preencher todos os campos.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif ?>



    <table class="table border border-info">
      <thead class="thead-dark table-primary">

        <tr>
          <th scope="col" class="col-sm-1">#</th>
          <th scope="col" class="col-sm-7">Nome</th>
          <th scope="col" class="col-sm-2">UDM</th>
          <th scope="col" class="col-sm-1 text-center">Status</th>
          <th scope="col" class="col-sm-1 text-center">Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php if ($produtos): ?>
          <?php foreach ($produtos as $produto): ?>

            <tr>
              <td>
                <?= $produto['id']; ?>
              </td>
              <td>
                <?= $produto['nome']; ?>
              </td>
              <td>
                <?= $produto['udm']; ?>
              </td>
              <td class="text-center">
                <?php
                if ($produto['stats']) {
                  echo "<button class='btn btn-success btn-sm' disabled>
                  <i class='bi bi-check-circle'></i>
                  </button>";
                } else {
                  echo "<button class='btn btn-danger btn-sm' disabled>
                  <i class='bi bi-dash-circle'></i>
                  </button>";
                }
                ?>
              </td>

              <td class="text-center">
                <a class="btn btn-primary btn-sm" href="<?= base_url() ?>produtos/edit/<?= $produto['id'] ?>">
                  <i class="bi bi-pencil"></i>
                </a>
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





    <a href="<?= base_url() ?>produtos/novo" class="btn btn-outline-primary">Adicionar um novo produto</a>

    <script>
      function goDelete(id) {
        var myUrl = 'produtos/delete/' + id
        if (confirm("Deseja intivar esse registro?")) {
          window.location.href = myUrl;
        } else {
          return false;
        }
      }

    </script>


  </div>
</section>
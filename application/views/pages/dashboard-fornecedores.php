<section id="faq" class="faq section-bg">
  <div class="container" data-aos="fade-up">


    <table class="table border border-info">
      <thead class="thead-dark table-primary">
        <tr>
          <th scope="col" class="col-sm-1">#</th>
          <th scope="col" class="col-sm-8">Razão Social</th>
          <th scope="col" class="col-sm-2">Status</th>
          <th scope="col" class="col-sm-1">Ações</th>
        </tr> 
      </thead>
      <tbody>
        <?php if ($fornecedores): ?>
          <?php foreach ($fornecedores as $fornecedor): ?>
            <tr>
              <td>
                <?= $fornecedor['id']; ?>
              </td>
              <td>
                <?= $fornecedor['nome']; ?>
              </td>
              <td>
                <?php
                  if ($fornecedor['stats']) {
                    echo "<button class='btn btn-success btn-sm w-50' disabled>Ativo</button>";
                  } else {
                    echo "<button class='btn btn-danger btn-sm w-50' disabled>Inativo</button>";
                  }
                  ?>
              </td>
              <td>
                <div class="col">
                  <a class="btn btn-primary btn-sm" href="<?= base_url() ?>/fornecedores/edit/<?= $fornecedor['id'] ?>">
                    <i class="bi bi-pencil"></i>
                  </a>
                </div>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="4" class="text-center">Nenhum fornecedor cadastrado</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>

    <a href="<?= base_url() ?>fornecedores/novo" class="btn btn-outline-primary">Adicionar um novo fornecedor</a>


  </div>
</section>

<script>
  function goDelete(id) {
    var myUrl = 'fornecedores/delete/' + id
    if (confirm("Deseja apagar esse registro?")) {
      window.location.href = myUrl;
    } else {
      return false;
    }
  }

</script>
<section id="faq" class="faq section-bg">
  <div class="container" data-aos="fade-up">


    <table class="table border border-info">
      <thead class="thead-dark table-primary">
        <tr>
          <th scope="col" class="col-sm-1">#</th>
          <th scope="col" class="col-sm-5">Nome</th>
          <th scope="col" class="col-sm">Marca</th>
          <th scope="col" class="col-sm-1">Ações</th>
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
                <?= $produto['marca']; ?>
              </td>
              <td>
                <div class="col">
                  <a class="btn btn-primary btn-sm" href="<?= base_url() ?>produtos/edit/<?= $produto['id'] ?>">
                    <i class="bi bi-pencil"></i>
                  </a>

                  <a class="btn btn-danger btn-sm" href="javascript:goDelete(<?= $produto['id'] ?>)">
                    <i class="bi bi-trash"></i>
                  </a>


                </div>
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
        if (confirm("Deseja apagar esse registro?")) {
          window.location.href = myUrl;
        } else {
          return false;
        }
      }

    </script>


  </div>
</section>
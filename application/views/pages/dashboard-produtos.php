<section id="faq" class="faq section-bg">
  <div class="container" data-aos="fade-up">


    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col" class="col-sm">#</th>
          <th scope="col" class="col-sm-9">Nome</th>
          <th scope="col" class="col-sm-2">Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($produtos as $produto): ?>
          <tr>
            <td>
              <?= $produto['id']; ?>
            </td>
            <td>
              <?= $produto['nome']; ?>
            </td>
            <td>
              <div class="col">
              <a class="btn btn-primary btn-sm" href="<?= base_url() ?>produtos/edit/<?=$produto['id']?>">
                <i class="bi bi-pencil"></i>
              </a>
                  
              <a class="btn btn-danger btn-sm" href="<?= base_url() ?>produtos/edit/<?=$produto['id']?>">
              <i class="bi bi-trash"></i>
              </a>
                  
                
              </div>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>


  </div>
</section>
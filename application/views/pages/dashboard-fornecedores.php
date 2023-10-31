<section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">
      

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Razão Social</th>
      <th scope="col">CNPJ</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($fornecedores as $fornecedor) : ?>
    <tr>
        <td><?= $fornecedor['id']; ?></td>
        <td><?= $fornecedor['nome']; ?></td>
        <td><?= $fornecedor['cnpj']; ?></td>
        <td> <div class="col">
              <a class="btn btn-primary" href="<?= base_url() ?>/fornecedores/edit/<?=$fornecedor['id']?>">
                <i class="bi bi-pencil"></i>
              </a>
                  
                <button type="button" class="btn btn-danger col">
                  <i class="bi bi-trash"></i>
                </button>
              </div> </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>


</div>
</section>
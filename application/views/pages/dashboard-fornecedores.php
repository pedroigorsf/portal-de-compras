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
        <td> x </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>


</div>
</section>
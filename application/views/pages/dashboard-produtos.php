<section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">
      

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col" class="col-sm">#</th>
      <th scope="col" class="col-sm-6">Nome</th>
      <th scope="col" class="col-sm">Categoria</th>
      <th scope="col" class="col-sm">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($produtos as $produto) : ?>
    <tr>
        <td><?= $produto['id']; ?></td>
        <td><?= $produto['nome']; ?></td>
        <td><?= $produto['categoria']; ?></td>
        <td> x </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>


</div>
</section>
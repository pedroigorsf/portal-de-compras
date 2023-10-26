<section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">
      

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Categoria</th>
      <th scope="col">Ações</th>
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
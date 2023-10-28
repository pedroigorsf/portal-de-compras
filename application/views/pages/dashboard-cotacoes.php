<section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">
      

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col" class="col-sm">#</th>
      <th scope="col" class="col-sm-5">Motivo</th>
      <th scope="col" class="col-sm-3">Solicitante</th>
      <th scope="col" class="col-sm">Data inicial</th>
      <th scope="col" class="col-sm">Data final</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($cotacoes as $cotacao) : ?>
    <tr>
        <td><?= $cotacao['id']; ?></td>
        <td><?= $cotacao['motivo']; ?></td>
        <td><?= $cotacao['fk_solicitante']; ?></td>
        <td><?= $cotacao['fk_cotacao_produtos']; ?></td>
        <td><?= $cotacao['data_inicial']; ?></td>
        <td><?= $cotacao['data_final']; ?></td>

        <td> x </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>


</div>
</section>
<section id="faq" class="faq section-bg">
  <div class="container" data-aos="fade-up">

    <?php if ($this->session->flashdata('success')): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><i class="bi bi-exclamation-circle-fill"></i></strong> Bem vindo(a)
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif ?>

    <section id="counts" class="counts">
      <div class="container">



        <div class="row">


          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-person-vcard"></i>
              <h3>Solicitantes</h3>
              <p>Os solicitantes de compras são peças-chave no processo de aquisição de produtos e serviços.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-person-check"></i>
              <h3>Aprovadores</h3>
              <p>Os aprovadores desempenham um papel fundamental na gestão financeira e na garantia de qualidade.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-building"></i>
              <h3>Fornecedores</h3>
              <p>Nossos serviços são projetados para fortalecer parcerias de sucesso.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-cart-check"></i>
              <h3>Cotacões</h3>
              <p>Nossa solução de cotação de compras simplifica e agiliza o processo de aquisição.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</section>
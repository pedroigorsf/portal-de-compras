<section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">
      

<fieldset class="scheduler-border">
            <legend class="scheduler-border text-center">
              <h1>Pedido de Compra 
                <strong>n° <?=$cotacoes["id"];?></strong>
              </h1>
            </legend>

 <section id="counts" class="counts">
      <div class="container">

        <div class="row">

        

          <div class="col-lg-6 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <h3>Fornecedores</h3>
              <a href="<?=base_url()?>cotacoes/adicionar_fornecedores/<?=$cotacoes["id"]?>" class="btn btn-success btn-sm">Adicionar fornecedor</a>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <h3>Produtos</h3>
              <a href="<?=base_url()?>cotacoes/adicionar_produtos/<?=$cotacoes["id"]?>" class="btn btn-success btn-sm">Adicionar produto</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    </fieldset>
    
    </div>
</section>


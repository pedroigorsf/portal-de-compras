<section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

    
        <fieldset class="scheduler-border">
            <legend class="scheduler-border">Cadastrar um novo produto</legend>

            <form action="<?= base_url() ?>produtos/cadastro" method="post">

            <div class="row">
                <div class="col-sm-6">
                    <!-- Name input -->
                    <div class="form-outline">
                        <label class="form-label" for="form8Example1">Nome</label>
                        <input type="text" name="nome" id="form8Example1" class="form-control"
                        value="<?= isset($produto) ? $produto["nome"] : ""; ?>"/>
                        <div class="form-text">Qual o nome do produto que deseja cadastrar?</div>
                        
                    </div>
                </div>

                <div class="col-sm">
                    <!-- Name input -->
                    <div class="form-outline">
                    <label class="form-label" for="form8Example4">Categoria</label>
                        <select class="form-select" name="categoria" aria-label="Default select example"  required>
                            <option selected>Escolher</option>
                            <option value="Ferramentas Especializadas">Ferramentas Especializadas</option>
                            <option value="Conexão e Fixação">Conexão e Fixação</option>
                            <option value="Controle de Tráfego">Controle de Tráfego</option>
                            <option value="Segurança e Emergência">Segurança e Emergência</option>
                            <option value="Materiais Isolantes">Materiais Isolantes</option>
                            <option value="Medição e Monitoramento">Medição e Monitoramento</option>
                            <option value="Energia Renovável">Energia Renovável</option>
                        </select>
                        
                        <div class="form-text">Escolha a categoria do produto.</div>
                    </div>
                </div>


                <div class="col-sm">
                    <!-- Name input -->
                    <div class="form-outline">
                    <label class="form-label" for="form8Example3">Marca</label>
                        <input type="text" name="marca" id="form8Example3" class="form-control" 
                        value="<?= isset($produto) ? $produto["marca"] : ""; ?>"/>
                            <div class="form-text">Qual a marca?</div>
                        
                    </div>
                </div>
            
                </fieldset>


            <div class="col py-5">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>
    </div>
    
    </form>

    </div>
    



    </div>
</section>
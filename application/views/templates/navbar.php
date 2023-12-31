<header id="header" class="d-flex align-items-center shadow-sm p-3 mb-5 bg-white rounded">
  <div class="container d-flex align-items-center justify-content-between">

    <!-- <i class="bx bx-cart"></i>  -->
    <h3 class="logo"><a href="<?= base_url() ?>"><span>Portal de Compras</span></a></h3>

    <nav id="navbar" class="navbar">
      <ul>

        <li><a class="nav-link scrollto" href="<?= base_url() ?>">Início</a></li>

        <?php if (permission()['tipo'] == "solicitante"): ?>

          <li class="dropdown"><a href="#"><span>Produtos</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= base_url() ?>produtos/novo">Cadastrar novo produto</a></li>
              <li><a href="<?= base_url() ?>produtos">Consultar produto</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Requisições</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= base_url() ?>cotacoes/novo">Requisitar nova cotação</a></li>
              <li><a href="<?= base_url() ?>cotacoes">Gerenciar requisição</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Fornecedores</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= base_url() ?>fornecedores/novo">Cadastrar novo fornecedor</a></li>
              <li><a href="<?= base_url() ?>fornecedores">Consultar fornecedor</a></li>
            </ul>
          </li>
        <?php elseif (permission()['tipo'] == "aprovador"): ?>


              <li><a href="<?= base_url() ?>cotacoes">Aprovações pendentes</a></li>
              <li><a href="<?= base_url() ?>cotacoes">Histórico de aprovações</a></li>

        <?php elseif (permission()['tipo'] == "Fornecedor"): ?>

          <li class="nav-link"><a href="<?= base_url() ?>cotacoes"><span>Cotações em aberto</span></i></a></li>
          <li class="nav-link"><a href="<?= base_url() ?>cotacoes"><span>Histórico de respostas</span></i></a></li>

        <?php endif; ?>
        <!-- FIM DO PAINEL FORNECEDORES E APROVADORES -->





        <li class="dropdown">
          <a href="#"><span>
              <i class="bi bi-person-circle"></i>
              <?php echo $usuario['nome']; ?>
            </span></a>
          <ul>
            <li><a href="<?= base_url() ?>"><i class="bi bi-person-fill"></i> Configurações</a></li>
            <li><a href="<?= base_url() ?>"><i class="bi bi-chat-dots-fill"></i> Mensagens</a></li>
            <li><a href="<?= base_url() ?>login/logout"><i class="bi bi-box-arrow-in-left"></i> Logout</a></li>
          </ul>
        </li>

        <!--<li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>-->
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>

  </div>
  
</header>
<br>


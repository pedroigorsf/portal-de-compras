  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center shadow-sm p-3 mb-5 bg-white rounded">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="<?= base_url() ?>"><span><i class="bx bx-cart"></i> Portal de Compras</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <!-- <li><a class="nav-link scrollto" href="#hero">Home</a></li> -->
          <li><a class="nav-link scrollto" href="<?= base_url() ?>">Início</a></li>

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
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
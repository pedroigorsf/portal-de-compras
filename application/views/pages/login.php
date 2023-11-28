<div class="bg-image" style="background-image: linear-gradient(to bottom, #FFF, #A0D5FF); height: 100vh">
    <div class="container" data-aos="fade-up">

        <fieldset class="scheduler-border">

            <section class=" text-center text-lg-start">
                <style>
                    .rounded-t-5 {
                        border-top-left-radius: 0.5rem;
                        border-top-right-radius: 0.5rem;
                    }

                    @media (min-width: 992px) {
                        .rounded-tr-lg-0 {
                            border-top-right-radius: 0;
                        }

                        .rounded-bl-lg-5 {
                            border-bottom-left-radius: 0.5rem;
                        }
                    }
                </style>
                <div class="card mb-3">
                    <div class="row g-0 d-flex align-items-center">
                        <div class="col-lg-4 d-none d-lg-flex">
                            <img src="<?= base_url() ?>assets/img/login.jpg" alt="Trendy Pants and Shoes"
                                class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body py-5 px-md-4">

                                

                                <div class="text-center">
                                    <h4 class="mt-1 mb-5 pb-1 text-primary">Portal de Compras</h4>
                                </div>

                                <form action="<?= base_url() ?>login/auth/" method="post">
                                    <div class="mb-4 text-center">

                                        <div class="form-check form-check-inline">
                                            <input class="btn-check" type="radio" name="tipo" id="flexRadioDefault1"
                                                value="1" required>
                                            <label class="btn btn-outline-primary" for="flexRadioDefault1">
                                                <i class="bi bi-person-badge"></i>
                                                Funcionário
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="btn-check" type="radio" value="2" name="tipo"
                                                id="flexRadioDefault2" required>
                                            <label class="btn btn-outline-primary" for="flexRadioDefault2">
                                                <i class="bi bi-buildings"></i>
                                                Fornecedor
                                            </label>
                                        </div>
                                    </div>
                                    <!-- Email input -->


                                    <div class="form-outline mb-3">
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                                            <input type="text" id="form2Example1" name="usuario" class="form-control"
                                                placeholder="Usuário" required />
                                        </div>
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-3">
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="bi bi-key-fill"></i></div>
                                            <input type="password" id="form2Example2" name="senha" class="form-control"
                                                placeholder="Senha" required />
                                        </div>
                                    </div>

                                    <!-- 2 column grid layout for inline styling -->
                                    <div class="row mb-4">
                                        <div class="col d-flex justify-content-left">
                                            <!-- Checkbox -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="form2Example31" checked />
                                                <label class="form-check-label" for="form2Example31"> Manter
                                                    conectado</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary btn-block mb-4 w-100">Entrar</button>

                                    <div class="row text-center">
                                        <!-- Simple link -->
                                        <a href="#!" class="text-dark">Esqueceu a senha?</a>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Design Block -->



    </div>
</div>
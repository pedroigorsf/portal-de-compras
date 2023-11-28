<?php if ($this->session->flashdata('error')): ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong><i class="bi bi-exclamation-circle-fill"></i></strong> Dados inválidos.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif ?>

<?php if ($this->session->flashdata('inactive_supplier')): ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong><i class="bi bi-exclamation-circle-fill"></i></strong> Seu cadastro foi
        desativado, por gentileza, contactar o administrador.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif ?>

<?php if ($this->session->flashdata('inactive_user')): ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong><i class="bi bi-exclamation-circle-fill"></i></strong> Seu cadastro foi
        desativado, por gentileza, contactar o administrador.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif ?>

<?php if ($this->session->flashdata('without-access')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong><i class="bi bi-exclamation-circle-fill"></i></strong> Acesso invalido!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif ?>
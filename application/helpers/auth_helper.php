<?php

function permission(){
    $ci = get_instance();
    $loggedUser = $ci->session->userdata("logged_user");

    if(!$loggedUser){
        $ci->session->set_flashdata("without-access", "Precisa está logado para acessar a página");
        redirect("login");
    }

    return $loggedUser;
}
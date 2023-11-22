<?php

function permission(){
    $ci = get_instance();
    $loggedUser = $ci->session->userdata("logged_user");
    // $typeUser = $ci->session->userdata("type_user");

    if(!$loggedUser){
        $ci->session->set_flashdata("without-access", "Precisa está logado para acessar a página");
        redirect("login");
    }





    return $loggedUser;
}
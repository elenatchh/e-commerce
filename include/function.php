<?php

// Pour voir si l'utilisateur est connecté
function isAuthUser(){
    if(isset($_SESSION['auth'])){
        return true;
    }else{
        return false;
    }
}

// Pour voir si l'utilisateur est connecté et admin
function isAuthUserAdmin(){
    var_dump($_SESSION['auth']['role']);
    if(isAuthUser() && $_SESSION['auth']['role'] == '1'){
        return true;
    }else{
        return false;
    }
}
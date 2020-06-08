<?php

    function accueil($page)
    {
        require_once 'views/accueil.php';
    }

    function realisations($page){
        require_once 'views/realisations.php';
    }

    function about($page){
        require_once 'views/about.php';
    }

    function contact($page){
        require_once 'views/contact.php';
    }

    function galerie($page){
        require_once 'views/galerie.php';
    }

    #Admin Side 
    function admin($page)
    {
        require_once 'admin/views/login.php';
    }
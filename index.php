<?php
    require_once 'controllers/displayer.php';
    
    $page = (isset($_GET["page"]))?$_GET["page"]:'accueil';

    try{
        if(empty($page)) throw new Exception('page non disponible', 1);
        else{
            switch($page)
            {
                case 'about':
                    about($page);
                break;
                case 'realisations':
                    realisations($page);
                break;
                case 'galerie' :
                    galerie($page);
                break;
                case 'contact' :
                    contact($page);
                break;
                #admin
                case 'administration' :
                    admin($page);
                break;
                
                default:
                    accueil($page);
                break;
            }
        }
    }
    catch(Exception $e){
        die('Erreur : '.$e);
    }
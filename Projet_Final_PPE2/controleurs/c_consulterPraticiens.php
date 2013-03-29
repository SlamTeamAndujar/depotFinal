<?php

    // affichage de l'en-tete
    include('vues/v_sommaire.php');
    
    
    // Affichage du detail
    if(isset($_REQUEST['detail']))
    {
        $num = $_REQUEST['detail'];
        $praticien = $pdo-> DetailsPraticiens($num);
        
        include('vues/v_consulterPraticiensDetails.php');
    }
    else 
    {
        
        if( !isset($_REQUEST['tri']))
            $tri = "PRA_NUM";
        else
            $tri = $_REQUEST['tri'];

        
        $praticiens = $pdo->getlesPracticiens($tri);
        
        include('vues/v_consulterPraticiens.php');
    }
    
    
    

        
?>
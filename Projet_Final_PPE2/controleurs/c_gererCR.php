<?php
//azerty
include("vues/v_sommaire.php");

$lesProduits = $pdo->getLesMedicaments();
$lesRapports = $pdo->getRapportVisite();
$lesPraticiens = $pdo->lesPracticiens();

$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['vis_matricule'];

switch($action){
        case 'saisirCR':
                include("vues/v_saisieCR.php");
        break;
//	case 'validerCR':
//            if(aze){
//                
//            }else{
//                
//            }
//            break;
        case 'annulerCR':
                include("vues/v_vide.php");
            
            break;    
       
	}
       
?>
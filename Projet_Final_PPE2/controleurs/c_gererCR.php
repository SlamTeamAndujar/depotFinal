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
	case 'validerCR':
            $msg="";
            $matricule= $idVisiteur;
            $num= $pdo->num();
            $numPraticien=$_POST['selectPraticien'];        
            $dateVisite= $_POST['dateVisite'];
            $bilan= $_POST['bilan'];
            $medoc1=$_POST['selectProduit1'];
            $medoc2=$_POST['selectProduit2'];
            
            
            if($_POST['selectMotif'] == 'autreMotif'){
                $motif=$_POST['autreMotif'];
            }else{
                $motif=$_POST['selectMotif'];
            }
            try{
                if( $medoc1 == $medoc2){
                    $quantite= $_POST['echantillon1']+$_POST['echantillon2'];       
                    $resultOffrir= $pdo->ajoutOffrir($matricule,$num,$medoc1,$quantite);
                    $result = $pdo->ajoutRapportVisite($matricule,$num,$numPraticien,$dateVisite,$bilan,$motif);
                }else{
                    $quantite1=$_POST['echantillon1'];
                    $quantite2=$_POST['echantillon2'];
                        $resultOffrir= $pdo->ajoutOffrir($matricule,$num,$medoc1,$quantite1);
                        $resultOffrir= $pdo->ajoutOffrir($matricule,$num,$medoc2,$quantite2);
                        $result = $pdo->ajoutRapportVisite($matricule,$num,$numPraticien,$dateVisite,$bilan,$motif);
                    }
            
            $msg = $msg."Fiche bilan enregistrée !";
            }
            catch(Exception $e)
            {
                $msg = $msg.$e;

            }
            include("vues/v_validerCR.php");
            break;
            
        case 'annulerCR':
                include("vues/v_vide.php");
            
            break;    
       
	}
       
?>
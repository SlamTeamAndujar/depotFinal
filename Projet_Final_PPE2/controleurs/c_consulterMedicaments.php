<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
switch ($action){
case "voirMedicaments":
    
        $lesMedicaments = $pdo->getLesMedicaments();
    
        if (!isset($_REQUEST['num']))
        {
            $num= 0;
        }
        else
        {
         $num= $_REQUEST['num'];   
        }
       
        include("vues/v_medicaments.php");
    break;
}
?>
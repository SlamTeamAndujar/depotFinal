<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
switch ($action){
case "voirMedicaments":
    
        $lesMedicaments = $pdo->getLesMedicaments();
        include("vues/v_medicaments.php");
    break;
}
?>
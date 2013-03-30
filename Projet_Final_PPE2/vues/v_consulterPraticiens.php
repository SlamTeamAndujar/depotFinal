<div id="contenu">
      <h2>Liste des Praticiens</h2>
      <form method="POST" action="index.php?uc=lesPraticiens">
      <div class="corpsForm">
     <table >
             <tr>
                <th >Numéro&nbsp</th> <br> 
               <th > Nom &nbsp </th> <br> 
                <th >Prénom</th>  
                  <th >Details</th> <br> 
                <th >&nbsp;</th>              
             </tr>
   
           
        </th>
    </tr>

<?php

  


    foreach($praticiens as $unPraticien)
    {
?>
<td><?php echo $unPraticien['PRA_NUM']; ?></td>
<td><?php echo $unPraticien['PRA_NOM']; ?></td>
<td><?php echo $unPraticien['PRA_PRENOM']; ?></td>
<td><a href ="index.php?uc=lesPraticiens&detail=<?php echo $unPraticien['PRA_NUM']; ?> " > <center>+ </center> </a></td>
</tr>
<?php
 
    
    }
?>

</table>
</form>
<div id="contenu">
      <h2>Détails du Praticien :</h2>
<table style="" id="detailPraticien" >

    </tr>
    <tr>
                    <td>
                         <label> Numéro : </label> 
                      </td>
                         <td>
                           <INPUT TYPE="text" NAME="num" SIZE="45" MAXLENGTH="60" value="<?php echo $praticien[0]['PRA_NUM']; ?>" readonly="readonly"> 
                          </td>
                     </tr>
                <tr>
                    <td>
                         <label> Nom : </label> 
                      </td>
                         <td>
                           <INPUT TYPE="text" NAME="nom" SIZE="45" MAXLENGTH="50" value="<?php echo $praticien[0]['PRA_NOM']; ?>" readonly="readonly"> 
                          </td>
                     </tr>
                     <td>
                         <label> Prénom : </label> 
                      </td>
                          <td>
                           <INPUT TYPE="text" NAME="prénom" SIZE="45" MAXLENGTH="50" value="<?php echo $praticien[0]['PRA_PRENOM']; ?>" readonly="readonly"> 
                          </td>
                     </tr>
                     <tr>
                         <td>
                             <label> Adresse : </label> 
                        </td>
                        <td>
                           <INPUT TYPE="text" NAME="adresse" SIZE="45" MAXLENGTH="250" value="<?php echo $praticien[0]['PRA_ADRESSE']." ".$praticien[0]['PRA_CP']." ".$praticien[0]['PRA_VILLE']; ?>" readonly="readonly"> 
                         
                       <tr>
                     <td>
                         <label> Notoriété: </label> 
                      </td>
                      
                      
                          <td>
                           <INPUT TYPE="text" NAME="notoriété" SIZE="45" MAXLENGTH="50" value="<?php echo $praticien[0]['PRA_COEFNOTORIETE']; ?>" readonly="readonly"> 
                          </td>
                     </tr>
                     <tr>
                         <td>
                             <label> Profession : </label> 
                        </td>
                        <td>
                           <INPUT TYPE="text" NAME="profession" SIZE="45" MAXLENGTH="50" value="<?php echo $praticien[0]['TYP_LIBELLE']; ?>" readonly="readonly"> 
                         </td>
                         </tr> 
                         <tr>
                         <td>
                             <label> Lieu de travail : </label> 
                        </td>
                        <td>
                           <INPUT TYPE="text" NAME="Lieudetrav" SIZE="45" MAXLENGTH="50" value="<?php echo $praticien[0]['TYP_LIEU']; ?>" readonly="readonly"> 
                         </td>
                         </tr> 
                         <tr>
                         <td>
                          <!---   <label> Dernier Diplome Obtenu : </label> 
                        </td>
                        <td>
                           <INPUT TYPE="text" NAME="diplome" SIZE="45" MAXLENGTH="50" readonly="readonly"> 
                         </td>
                         </tr> 
                         <tr>
                         <td>
                             <label> Coefficient de prescription : </label> 
                        </td>
                        <td>
                           <INPUT TYPE="text" NAME="coef" SIZE="45" MAXLENGTH="50" value=" " readonly="readonly"> 
                         </td>
                         </tr> !-->


</table>
</br>
 <center>
    <a href="index.php?uc=lesPraticiens" title="Consulter les praticiens">Retour  </a>
 </center>
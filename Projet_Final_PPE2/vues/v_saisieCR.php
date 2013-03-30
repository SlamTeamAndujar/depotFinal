
    <div id="contenu">
        <h2> Rapport de visite </h2>
         </br>
        <form method="POST" action="index.php?uc=gererCR&action=saisirCR">
            <table>
                <tr>
                    <td>
                        <label>NUMERO:</label>
                    </td>
                    <td>
                        <INPUT TYPE="text" NAME="numero" SIZE="25" MAXLENGTH="50" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>DATE VISITE:</label>
                    </td>
                    <td>
                        <INPUT TYPE="text" NAME="dateVisite" SIZE="25" MAXLENGTH="50" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>PRATICIEN:</label>
                    </td>
                    <td>
                        <select  NAME="selectPraticien"  MAXLENGTH="50"> 
                            <option value="choisirpraticiens" >choix praticiens</option>
                               <?php foreach( $lesPraticiens as $unPraticiens ) {   
                                            $numero=$unPraticiens['PRA_NUM'];
                                            $nom= $unPraticiens['PRA_NOM'];
                                            $prenom= $unPraticiens['PRA_PRENOM'];
                                            echo ("<option value='.$numero.'>".$nom." ".$prenom."</option>");
                                            } ?>
                         </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>REMPLACANT:</label>
                    </td>
                    <td>
                        <INPUT TYPE="checkbox"  name="checkRemplacant" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>DATE:</label>
                    </td>
                    <td>
                        <INPUT TYPE="text" NAME="date" SIZE="25" MAXLENGTH="50" value="<?php echo date("d/m/Y");?>" disabled>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>MOTIF:</label>
                    </td>
                    <td>
                        <select TYPE="select" name="selectMotif" id="selectMotif" MAXLENGTH="50" onchange="autreChoix()" >
                            <option value="choicMotif">choix motif</option>
                            <?php foreach( $lesRapports as $unRapport ) {   
                                            $motif= $unRapport['RAP_MOTIF'];
                                            echo ("<option value='.$motif.'>".$motif."</option>");
                                            }?>
                            <option value="autreMotif" >Autre motif</option>
                        </select>
                        <INPUT TYPE="text" NAME="autreMotif" id="autreMotif" SIZE="25" MAXLENGTH="50" disabled="true" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>BILAN:</label>
                    </td>
                    <td>
                        <textarea style="resize: none;" name="bilan" rows="6" cols="60"></textarea>
                    </td>
                </tr>
            </table>
           
          <table>
            <tr>
                <td>
                     <h3>Elements présentés</h3>
                </td>
                <td></td>
                <td>
                    <h3>Echantillons</h3>
                </td>
            </tr>
            
                <tr>
                    <td>
                        <label>PRODUIT 1:</label>
                    </td>
                    <td>
                        <select  NAME="selectProduit1"  MAXLENGTH="50"> 
                            <option value="choisirproduit" >choix 1ère produit</option>
                               <?php foreach( $lesProduits as $unProduit ) {   
                                            $id=$unProduit['MED_DEPOTLEGAL'];
                                            $nom= $unProduit['MED_NOMCOMMERCIAL'];
                                            echo ("<option value='.$id.'>".$nom."</option>");
                                            } ?>
                         </select>
                    </td>
                    <td>
                        <label>reçue:</label>
                        <INPUT TYPE="checkbox" name="checkRecue" id="checkRecue" onchange="autoriseEchantillon()">
                    </td>
                    <td>
                        <INPUT TYPE="text" NAME="echantillon1" id="echantillon1" SIZE="25" MAXLENGTH="50" disabled="true" >
                        <input type="button" name="plus" value="+" onclick="ajoutEchantillon()">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>PRODUIT 2:</label>
                    </td>
                    <td>
                        <select  NAME="selectProduit2"  MAXLENGTH="50"> 
                            <option value="choisirproduit2" >choix 2ème produit</option>
                               <?php foreach($lesProduits as $unProduit ) { 
                                   $id=$unProduit['MED_DEPOTLEGAL'];
                                            $nom= $unProduit['MED_NOMCOMMERCIAL'];
                                            echo ("<option value='.$id.'>".$nom."</option>");
                                            } ?>
                         </select>
                    </td>
                     <td>
                        <label>reçue:</label>
                        <INPUT TYPE="checkbox"  name="checkRecue2" id="checkRecue2" onchange="autoriseEchantillon2()">
                    </td>
                    <td>
                        <INPUT TYPE="text" NAME="echantillon2" id="echantillon2" SIZE="25" MAXLENGTH="50" disabled="true" >
                        <input type="button" name="plus2" value="+" onclick="ajoutEchantillon2()">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>DOCUMENTATION OFFERTE:</label>
                    </td>
                    <td>
                        <INPUT TYPE="checkbox"  name="checkRemplacant">
                    </td>
                </tr>
             </br>
             </br>
             <tr>
                <td>               
                </td>
              </tr>
            </table>
             </br>
            </br>
            <input  type="submit" value="Valider" name="valider">
       </form>
         <form method="POST" action="index.php?uc=gererCR&action=annulerCR">
             
            <input  type="submit" value="Annuler" name="annuler">
         </form>
    </div>

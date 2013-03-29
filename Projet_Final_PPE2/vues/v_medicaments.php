<div>
    <h2>Pharmacopee</h2>
    
    <?
       foreach ($lesMedicaments as $unMedicament) {
			$depotLegal = $unMedicament['med_depotlegal'];
			$nomCommercial = $unMedicament['med_nomcommercial'];
                        $famille = $unMedicament['fam_libelle'];
                        $composition = $unMedicament['med_composition'];
                        $contreIndic = $unMedicament['med_contrainte'];
                        $prixEchantillon = $unMedicament['med_prixechantillon'];
       }
       
        ?>
    
     Depot Legal 
     <input type="text" name="nom" value=<?php echo $depotLegal ?> />
          
   
</div>
<?php
/** 
 * Classe d'accès aux données. 
 
 * Utilise les services de la classe PDO
 * pour l'application exempleMVC du cours sur la bdd bddemployés
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdo qui contiendra l'unique instance de la classe
 * @package default
 * @author AP
 * @version    1.0
 * @link       http://www.php.net/manual/fr/book.pdo.php
 */

class PdoGsb{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=gsb_visiteurs';   		
      	private static $user='root' ;    		
      	private static $mdp='' ;
        private static $monPdo;
	private static $monPdoGsb=null;

/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct(){
        try {
    	PdoGsb::$monPdo = new PDO(PdoGsb::$serveur.';'.PdoGsb::$bdd, PdoGsb::$user, PdoGsb::$mdp); 
		PdoGsb::$monPdo->query("SET CHARACTER SET utf8");
	
        } catch (Exception $e) {
            throw new Exception("Erreur Ã  la connexion \n" . $e->getMessage());
        }
        }

	public function _destruct(){
		PdoGsb::$monPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe PdoExemple
 
 * Appel : $instancePdoExemple = PdoExemple::getPdoExemple();
 
 * @return l'unique objet de la classe PdoExemple
 */
	public  static function getPdoGsb(){
		if(PdoGsb::$monPdoGsb==null){
			PdoGsb::$monPdoGsb= new PdoGsb();
		}
		return PdoGsb::$monPdoGsb;  
	}
   public function getInfosVisiteur($login,$mdp){
       // retourne un tableau associatif contenant le visiteur
         $req="select VIS_MATRICULE, VIS_NOM ,VIS_PRENOM from visiteur where LOGIN = '$login' and MDP = '$mdp'";
       //$req="select VIS_MATRICULE, VIS_NOM ,VIS_PRENOM from visiteur where LOGIN = 'test' and MDP = 'test'";
         $rs = PdoGsb::$monPdo->query($req);
		$ligne = $rs->fetch(PDO::FETCH_ASSOC);
		return $ligne;
        }
   public function getLesVisiteurs() {
     // retourne un tableau associatif contenant tous les visiteurs
         $req="select vis_matricule, VIS_NOM, VIS_VILLE from visiteur";
         $rs = PdoGsb::$monPdo->query($req);
		$ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
		return $ligne;
        // ou return $this->_pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getLesMedicaments() {
        $req="SELECT  `MED_DEPOTLEGAL` ,  `MED_NOMCOMMERCIAL` , FAM_LIBELLE,  `MED_COMPOSITION` ,  `MED_CONTREINDIC` ,  `MED_PRIXECHANTILLON` 
              FROM  `medicament` 
              JOIN famille ON medicament.fam_code = famille.fam_code";
        $rs= PdoGsb::$monPdo->query($req);
                $ligne = $rs->fetchAll (PDO::FETCH_ASSOC);
                return $ligne;
    }
    
     public function getRapportVisite(){
        $req = "select * from rapport_visite";
        $rs= PdoGsb::$monPdo->query($req);
                $ligne = $rs->fetchAll (PDO::FETCH_ASSOC);
                return $ligne;
    }
    
    public function getlesPracticiens($tri)
    {
      // retourne un tableau associatif avec la liste des praticiens
      $req="SELECT * FROM praticien ORDER BY ". $tri ;
      $rs = PdoGsb::$monPdo->query($req);
      $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
      return $ligne;
    }
    
   public function DetailsPraticiens($num)
    {
        // retourne un tableau associatif comportant les informations du praticien choisi
      $req="SELECT PRA_NUM, PRA_NOM, PRA_PRENOM, PRA_ADRESSE, PRA_CP, 
          PRA_VILLE, PRA_COEFNOTORIETE, TYP_LIBELLE, TYP_LIEU
          FROM praticien p, type_praticien t 
          WHERE p.TYP_CODE = t.TYP_CODE AND PRA_NUM=".$num;
      $rs = PdoGsb::$monPdo->query($req);
      $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
      return $ligne;
    }
    
}   
  ?>
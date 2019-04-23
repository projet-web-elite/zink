<?PHP
include "C:/wamp64/www/ZINK/zink/config.php";
class AnnonceC {


	function ajouterAnnonce($ann){
		$sql="insert into a_produit(titre,type,description,image) values (:titre,:type,:description,:image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $titre=$ann->getTitre();
        $type=$ann->getType();
        $description=$ann->getDesc();
        $image=$ann->getImage();
		$req->bindValue(':titre',$titre);
		$req->bindValue(':type',$type);
		$req->bindValue(':description',$description);
		$req->bindValue(':image',$image);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherAnnonce(){
		$sql="SElECT * From a_produit ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerannonce($titre){
		$sql="DELETE FROM a_produit where titre= :titre";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':titre',$titre);
		try{
            $req->execute();
           header('Location: annonces-produit.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierAnnonce($ann,$titre){
		$sql="UPDATE a_produit SET titre=:titre ,type=:type , description=:description , image=:image WHERE titre='".$titre."' ";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        //$id=$ann->getId();
        $titre=$ann->getTitre();
        $description=$ann->getDesc();
        $type=$ann->getType();
        $image=$ann->getImage();

        echo"<script>alert('!!!!!!!!!'')</script>";
		
		$datas = array(':titre'=>$titre, ':description'=>$description, ':type'=>$type,':image'=>$image);
		//$req->bindValue(':id',$id);
		$req->bindValue(':titre',$titre);
	    $req->bindValue(':type',$type);
		$req->bindValue(':description',$description);
		$req->bindValue(':image',$image);
		
            $s=$req->execute();
			
          // header('Location: annonces-produit.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
  
        }
		
	}
	function recupererAnnonce($titre){
		$sql="SELECT * from a_produit where titre='$titre' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	


		function recherchetitre($titre){
		//$sql=`SElECT * From a_produit where titre="'.$titre'"` ;
		$sql ="SELECT * FROM a_produit WHERE titre LIKE '%:titre%' ORDER BY id";
		//$sql="SElECT * From a_produit where titre like "'&$titre&'" ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
	
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
		}

		function triAlph(){
			$sql="SElECT * From a_produit ORDER by titre DESC ";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
		
			return $liste;
			}
	        catch (Exception $e){
	            die('Erreur: '.$e->getMessage());
	        }	
		}
	}
?>
<?PHP
//include "../config.php";
class PromoC {
function afficherPromo ($promo){
		echo "Id Promotion: ".$promo->getIdpromo()."<br>";
		echo "Nom Promotion: ".$promo->getNompromo()."<br>";
		echo "Date de debut: ".$promo->getDatedebut()."<br>";
		echo "Date de fin: ".$promo->getDatefin()."<br>";
		echo "Pourcentage: ".$promo->getPourcentage()."<br>";
		echo "Prix Ancien: ".$promo->getPrixAncien()."<br>";
		echo "id Event: ".$promo->getidevent()."<br>";
		echo "id Produit: ".$promo->getidproduit()."<br>";


	}
	function calculerNouveauPrix($promo){
		$a=($promo->getPrixAncien() * $promo->getPourcentage())/100;
		echo $a;
	}
	function ajouterPromo($promo){
		$sql="insert into promotion (id,nom,dateDebut,dateFin,pourcentage,prixAncien,idevent,idproduit) values (:id, :nom,:dateD,:dateF,:pourcentage,:prixAncien,:idevent,:idproduit)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$promo->getIdpromo();
        $nom=$promo->getNompromo();
        $datedebut=$promo->getDatedebut();
        $datefin=$promo->getDatefin();
        $pourcentage=$promo->getPourcentage();
        $prixAncien=$promo->getPrixAncien();
        $idevent=$promo->getidevent();
        $idproduit=$promo->getidproduit();

		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':dateD',$datedebut);
		$req->bindValue(':dateF',$datefin);
		$req->bindValue(':pourcentage',$pourcentage);
		$req->bindValue(':prixAncien',$prixAncien);
		$req->bindValue(':idevent',$idevent);
		$req->bindValue(':idproduit',$idproduit);


		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherPromos(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From promotion";

		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
		function afficherPromos1(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From promotion";
		$cat=$_GET['cat'];
$art="select * from promotion where idevent=".$cat."";
		$db = config::getConnexion();
		try{
		$liste=$db->query($art);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerPromo($id){
		$sql="DELETE FROM promotion where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierPromo($promo,$id){
		$sql="UPDATE promotion SET id=:idd, nom=:nom,dateDebut=:dateD,dateFin=:dateF,pourcentage=:pourcentage,prixAncien=:prixAncien,idevent=:idevent,idproduit=:idproduit WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$promo->getIdpromo();
        $nom=$promo->getNompromo();
        $datedebut=$promo->getDatedebut();
        $datefin=$promo->getDatefin();
        $pourcentage=$promo->getPourcentage();
        $prixAncien=$promo->getPrixAncien();
        $idevent=$promo->getidevent();
        $idproduit=$promo->getidproduit();


		$datas = array(':idd'=>$idd, ':id'=>$id, ':nom'=>$nom,':dateD'=>$datedebut,':dateF'=>$datefin,':pourcentage'=>$pourcentage,':prixAncien'=>$prixAncien,':idevent'=>$idevent,':idproduit'=>$idproduit);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':dateD',$datedebut);
		$req->bindValue(':dateF',$datefin);
		$req->bindValue(':pourcentage',$pourcentage);
		$req->bindValue(':prixAncien',$prixAncien);
		$req->bindValue(':idevent',$idevent);
		$req->bindValue(':idproduit',$idproduit);

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererPromo($id){
		$sql="SELECT * from promotion where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListePromo($pourcentage){
		$sql="SELECT * from promotion where pourcentage=$pourcentage";
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
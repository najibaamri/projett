<?PHP
//include "../config.php";
class EventC {
function afficherEvent ($event){
		echo "Id Evenement: ".$event->getIdevent()."<br>";
		echo "Nom Evenement: ".$event->getNomevent()."<br>";
		echo "Date de debut: ".$event->getDatedebut()."<br>";
		echo "Date de fin: ".$event->getDatefin()."<br>";
		echo "Description: ".$event->getDescription()."<br>";
		echo "Image: ".$event->getImg()."<br>";

	}
	function calculerSalaire($event){
		echo $event->getDescription() * $event->getDescription();
	}
	function ajouterEvent($event){
		$sql="insert into evenement (id,nom,dateDebut,dateFin,description,img) values (:id, :nom,:dateD,:dateF,:description,:img)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
	
        $id=$event->getIdevent();
        $nom=$event->getNomevent();
        $datedebut=$event->getDatedebut();
        $datefin=$event->getDatefin();
        $description=$event->getDescription();
        $img=$event->getImg();

		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':dateD',$datedebut);
		$req->bindValue(':dateF',$datefin);
		$req->bindValue(':description',$description);
		$req->bindValue(':img',$img);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherEvents(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From evenement";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerEvent($id){
		$sql="DELETE FROM evenement where id= :id";
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
	function modifierEvent($event,$id){
		$sql="UPDATE evenement SET id=:idd, nom=:nom,dateDebut=:dateD,dateFin=:dateF,description=:description,img=:img WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$event->getIdevent();
        $nom=$event->getNomevent();
        $datedebut=$event->getDatedebut();
        $datefin=$event->getDatefin();
        $description=$event->getDescription();
        $img=$event->getImg();

		$datas = array(':idd'=>$idd, ':id'=>$id, ':nom'=>$nom,':dateD'=>$datedebut,':dateF'=>$datefin,':description'=>$description,':img'=>$img);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':dateD',$datedebut);
		$req->bindValue(':dateF',$datefin);
		$req->bindValue(':description',$description);
		$req->bindValue(':img',$img);


		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererEvent($id){
		$sql="SELECT * from evenement where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeEvent($description){
		$sql="SELECT * from evenement where description=$description";
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
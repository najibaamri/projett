<?PHP
include "../../entities/evenement.php";
include "../../core/eventC.php";
include "../../config.php";


if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['dateD']) and isset($_POST['dateF']) and isset($_POST['description'])and isset($_POST['img'])) {
$event1=new Evenement($_POST['id'],$_POST['nom'],$_POST['dateD'],$_POST['dateF'],$_POST['description'],$_POST['img']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$event1C=new EventC();
$event1C->ajouterEvent($event1);
header('Location: AfficherEvent.php');

	
}else{
	echo "vérifier les champs";
}
//*/

?>
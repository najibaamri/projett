<?PHP
include "../entities/promotion.php";
include "../core/promoC.php";

if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['dateD']) and isset($_POST['dateF']) and isset($_POST['pourcentage']) and isset($_POST['prixAncien'])){
	echo "<script language=javascript>
	notifyMe();
	</script>";
	
$promo1=new Promotion($_POST['id'],$_POST['nom'],$_POST['dateD'],$_POST['dateF'],$_POST['pourcentage'],$_POST['prixAncien']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3

$promo1C=new PromoC();
$promo1C->ajouterPromo($promo1);
//header('Location: ajoutPromo.php');
	
		

	
}else{
	echo "vérifier les champs";
}
//*/

?>
<?PHP
include "../../core/eventC.php";
include "../../config.php";
$eventC=new EventC();
if (isset($_POST["id"])){
	$eventC->supprimerEvent($_POST["id"]);
	header('Location: AfficherEvent.php');
}

?>
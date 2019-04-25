  <script type="text/javascript">
  function notifyMe() {
  if (!("Notification" in window)) {
    alert("This browser does not support system notifications");
  }
  else if (Notification.permission === "granted") {
    notify();
  }
  else if (Notification.permission !== 'denied') {
    Notification.requestPermission(function (permission) {
      if (permission === "granted") {
        notify();
      }
    });
  }
  
  function notify() {
    var notification = new Notification('PROMOTION', {
      icon: '../notifier.png',
      body: "Hey! Promotion ajoutée avec succés!",

    });

    notification.onclick = function () {
      window.location.replace("afficherPromo.php");      
    };
    setTimeout(notification.close.bind(notification), 7000); 
  }

}
</script>
<?PHP
include "../../config.php";
include "../../entities/promotion.php";
include "../../core/promoC.php";

if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['dateD']) and isset($_POST['dateF']) and isset($_POST['pourcentage']) and isset($_POST['prixAncien'])and isset($_POST['idevent'])and isset($_POST['idproduit'])){
	
	
$promo1=new Promotion($_POST['id'],$_POST['nom'],$_POST['dateD'],$_POST['dateF'],$_POST['pourcentage'],$_POST['prixAncien'],$_POST['idevent'],$_POST['idproduit']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3

$promo1C=new PromoC();
$promo1C->ajouterPromo($promo1);
header('Location: afficherPromo.php');
echo "<script language=javascript>
	notifyMe();
	</script>";	
$to = 'najibaamri23@gmail.com';
$subject = 'Promotion ajouté';
$texte = 'nouvelle promotion';
$header = 'From : najibaamri23@gmail.com';
mail($to, $subject, $texte, $header);

	
}else{
	echo "vérifier les champs";
}
//*/

?>
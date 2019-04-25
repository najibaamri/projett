<?PHP
include "../entities/promotion.php";
include "../core/promoC.php";
$promo=new Promotion(75757575,'BEN Ahmed',14,50,20,13);
$promoC=new PromoC();
$promoC->afficherPromo($promo);
echo "****************";
echo "<br>";
echo "cin:".$promo->getIdpromo();
echo "<br>";
echo "nom:".$promo->getNompromo();
echo "<br>";
echo "prenom:".$promo->getDatedebut();
echo "<br>";
echo "nbH:".$promo->getDatefin();
echo "<br>";
echo "tarif:".$promo->getPourcentage();
echo "<br>";
echo "tarif:".$promo->getPrixAncien();
echo "<br>";
echo "le salaire est : ";
$promoC->calculerNouveauPrix($promo); 
echo "<br>";


?>
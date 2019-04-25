<?php


class Promotion
{
    private $id;
    private $nom;
    private $dateDebut;
    private $dateFin;
    private $pourcentage;
    private $prixAncien;
    private $idevent;
    private $idproduit;


    /*public static function getPromo($idprod)
    {
        $db = config::getConnexion(); //appel fonction static sans new
        $req = $db->query('select prod.nomproduit from produit prod INNER JOIN promotion ON promotion.idproduit = prod.idproduit where prod.idproduit=\'" . $idprod."\' ');
        $req->bindValue(':idprod', $idprod, PDO::PARAM_INT);
        $req->execute();
        /*return $req->fetchAll();
    }


    public static function getPromotions()
    {
        $list = [];
        $db = config::getConnexion(); //appel fonction static sans new
        $req = $db->query('select promo.idpromo,promo.nompromo,promo.datedebut,promo.datefin,promo.pourcentage from promotion promo');
        foreach ($req->fetchAll() as $prom) {
            $list[] = new Promotion($prom['idpromo'], $prom['nompromo'], $prom['datedebut'], $prom['datefin'], $prom['pourcentage']);
        }

        return $list;
    }*/

    public function __construct($idpromo, $nompromo,$datedebut, $datefin, $pourcentage, $prixancien, $idevent, $idproduit)
    {
        $this->id = $idpromo;
        $this->nom = $nompromo;
        $this->dateDebut = $datedebut;
        $this->dateFin = $datefin;
        $this->pourcentage = $pourcentage;
        $this->prixAncien = $prixancien;
        $this->idevent = $idevent;
        $this->idproduit = $idproduit;




    }

    /**
     * @return mixed
     */
    public function getIdpromo()
    {
        return $this->id;
    }

    /**
     * @param mixed $idpromo
     */
    public function setIdpromo($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNompromo()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nompromo
     */
    public function setNompromo($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */

    /**
     * @return mixed
     */
    public function getDatedebut()
    {
        return $this->dateDebut;
    }

    /**
     * @param mixed $datedebut
     */
    public function setDatedebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     * @return mixed
     */
    public function getDatefin()
    {
        return $this->dateFin;
    }

    /**
     * @param mixed $datefin
     */
    public function setDatefin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

    /**
     * @return mixed
     */
    public function getPourcentage()
    {
        return $this->pourcentage;
    }

    /**
     * @param mixed $pourcentage
     */
    public function setPourcentage($pourcentage)
    {
        $this->pourcentage = $pourcentage;
    }

    public function getPrixAncien()
    {
        return $this->prixAncien;
    }

    /**
     * @param mixed $pourcentage
     */
    public function setPrixAncien($prixAncien)
    {
        $this->prixAncien = $prixAncien;
    }
        public function getidevent()
    {
        return $this->idevent;
    }

    /**
     * @param mixed $pourcentage
     */
    public function setidevent($idevent)
    {
        $this->idevent = $idevent;
    }
    
        public function getidproduit()
    {
        return $this->idproduit;
    }

    /**
     * @param mixed $pourcentage
     */
    public function setidproduit($idproduit)
    {
        $this->idproduit = $idproduit;
    }
    
}
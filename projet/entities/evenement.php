<?php

class Evenement
{
    private $id;
    private $nom;
    private $dateDebut;
    private $dateFin;
    private $description;
    private $img;

   /*public  function getidPromo()
    {
        $db = config::getConnexion(); //appel fonction static sans new
        $req = $db->query('select prom.id from promotion prom INNER JOIN evenement ON evenement.idPromo = prom.id ');
        $this->idPromo=$req;
        return $this->idPromo;

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

    public function __construct($idevent, $nomevent,$datedebut, $datefin, $description, $img)
    {
        $this->id = $idevent;
        $this->nom = $nomevent;
        $this->dateDebut = $datedebut;
        $this->dateFin = $datefin;
        $this->description = $description;
        $this->img = $img;


    }

    /**
     * @return mixed
     */
    public function getIdevent()
    {
        return $this->id;
    }

    /**
     * @param mixed $idpromo
     */
    public function setIdevent($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNomevent()
    {
        return $this->nom;
    }
      public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $nompromo
     */
    public function setNomevent($nom)
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $pourcentage
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
  public function setImg($img)
    {
        $this->img = $img;
    }
    /**
     * @return mixed
     */


}
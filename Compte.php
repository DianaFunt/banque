<?php
class Compte
{
  private $libelle;
  private $solde;
  private $devise;
  private $titulaire;

  public function __construct($libelle, $solde, $devise, $titulaire)
    {
        $this->libelle = $libelle;
        $this->solde = $solde;
        $this->devise = $devise;
        $this->titulaire= $titulaire;
        $this->titulaire->addCompte($this); // ajouter un compte dans tableau 'comptes' pour un titulaire


    }

  public function getLibelle()
  {
    return $this->libelle;
  }
  public function getSolde()
  {
    return $this->solde;
  }
  public function getDevise()
  {
    return $this->devise;
  }

  public function getTitulaire()
  {
    return $this->titulaire;
  }

  public function setLibelle($libelle)
  {
    $this->libelle = $libelle;
  }
  public function setSolde($solde)
  {
    $this->solde = $solde;
  }
  public function setDevise($devise)
  {
    $this->devise = $devise;
  }
  public function setTitulaire($titulaire)
  {
    $this->titulaire = $titulaire;
  }

  public function __toString(){
    return $this->getLibelle()." ".$this->getSolde()." ".$this->getDevise(); //." ".$this->getTitulaire()."<br>";
    }
}

?>
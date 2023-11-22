<?php
class Titulaire
{
    private $nom;
    private $prenom;
    private $age;
    private $ville;
    private $comptes; 

    public function __construct($nom, $prenom, $age, $ville)
    {
        $this->nom = $nom;
        $this->prenom= $prenom;
        $this->age = $age;
        $this->ville= $ville;
        $this->comptes = []; // un tableau pour les comptes

    }
    public function afficherComptes(){
        echo $this->getNom() . " " . $this->getPrenom(). " " . $this->getAge(). " " . $this->getVille().'<br>'; // afficher tous comptes pour un titulaire

        foreach($this->comptes as $compte){  //trie les comptes par titulaire
            echo $compte;
        }
    }


    // ajouter un compte depuis fichier Comptes.php dans tableau 'comptes'
    public function addCompte(Comptes $compte){
        $this->comptes []= $compte;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getVille()
    {
        return $this->ville;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function setVille($ville)
    {
        $this->ville = $ville;
    }
    public function __toString()
    {
        return $this->getNom() . " " . $this->getPrenom(). " " . $this->getAge(). " " . $this->getVille();
    }
}

?>
<?php

class Personnage 
{
    public $_nom
    public $_prenom
    public $_age
    public $_sexe

     public function __construct ($nom, $prenom, $age, $sexe) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_age = $age;
        $this->_sexe =  $sexe;
    }
}

?>
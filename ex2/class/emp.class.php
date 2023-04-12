<?php

class _emp extends _magasins
{
    public $_nom
    public $_prenom
    public $_dateemb
    public $_poste
    public $_salairek
    public $_service
    public $_repas


     public function __construct ($nom, $prenom, $dateemb, $poste, $salairek, $service) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateemb = $dateemb;
        $this->_poste =  $poste;
        $this->_salairek = $salairek;
        $this-> _service =  $service;
    }

    public function anciente() {
        $calcul = $datej - $_dateemb;
        echo $_nom."est dans la boite depuis".$calcul;
    }

    public function prime($datej) {

        $datevire = date("31, 11, 2012");

        if ($datej = $datevire) {
        $ancien = $datej - $_dateemb;
        $primancien = $ancien * 0.02;
        $primsalaire = $_salairek * 0.05;
        $prime = $primsalaire + $primancien;

        echo "La prime annuel de ".$_nom."sera de ".$prime . "/ le montant a ete transmis a la banque";
    }

        
    }
}

?>
<?php
class _magasins
{
    public $_nom
    public $_adress
    public $_cpostal
    public $_ville
    public $_moyenrepas

     public function __construct ($nom, $adress, $cpostal, $ville, $salairek, $moyenrepas) {
        $this->_nom = $nom;
        $this->_adress = $adress;
        $this->_cpostal = $cpostal;
        $this->_ville =  $ville;
        $this->_salairek = $salairek;
        $this-> _moyenrepas =  $moyenrepas;
    }


}
?>
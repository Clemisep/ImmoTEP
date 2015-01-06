<?php

class Date {
    
    private $annee, $mois, $jour;
    
    function Date($annee, $mois, $jour) {
        $this->annee = $annee;
        $this->mois = $mois;
        $this->jour = $jour;
    }
    
    function toString() {
        return $this->jour . '/' . $this->mois . '/' . $this->annee;
    }
}
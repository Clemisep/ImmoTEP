<?php

class Membre {
    private $pseudo,
            $prenom,
            $nom,
            $adrelec,
            $motDePasseCrypte,
            $telephone,
            $dateDeNaissance,
            $sexe;
    
    function Membre(String $pseudo, String $prenom, String $nom, Adrelec $adrelec,
                    String $motDePasseCrypte, String $telephone, Date $dateDeNaissance, $sexe) {
        $this->pseudo = $pseudo;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->adrelec = $adrelec;
        $this->motDePasseCrypte = $motDePasseCrypte;
        $this->telephone = $telephone;
        $this->dateDeNaissance = $dateDeNaissance;
        $this->sexe = $sexe;
    }
    
    function recPseudo() {
        return $this->pseudo;
    }
    
    function recPrenom() {
        return $this->prenom;
    }
    
    function recNom() {
        return $this->nom;
    }
    
    function recAdrelec() {
        return $this->adrelec;
    }
    
    function recMotDePasseCrypte() {
        return $this->motDePasseCrypte;
    }
    
    function recTelephone() {
        return $this->telephone;
    }
    
    function recDateDeNaissance() {
        return $this->dateDeNaissance;
    }
    
    function recSexe() {
        return $this->sexe;
    }
    
    function recListe() {
        return "'$this->pseudo', '$this->prenom', '$this->nom', '$this->adrelec',"
                . "'$this->motDePasseCrypte', '$this->telephone', '$this->dateDeNaissance',"
                . "'$this->sexe'";
    }
}
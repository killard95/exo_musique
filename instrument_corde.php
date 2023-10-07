<?php
class Piano extends Instrument_corde {

    protected $nbr_touche ;
    
}

class Piano_num extends Piano {
    
    protected $toucher_lourd ;
    protected $echantillonage ;

    
    public function __construct($nom,$prix_achat,$prix_vente,$largeur,$longueur,$touche,$toucher_lourd,$echant){
        $this->nom = $nom ;
        $this->prix_achat = $prix_achat ;
        $this->prix_vente = $prix_vente ;
        $this->largeur = $largeur ;
        $this->longueur = $longueur ;
        $this->nbr_touche = $touche ;
        $this->toucher_lourd = $toucher_lourd ;
        $this->echant = $echant ;
    }
}

class Piano_droit extends Piano {

    protected $dir_cordes ;
    protected $silencieux ;


    public function __construct($nom,$prix_achat,$prix_vente,$largeur,$longueur,$touche,$dir_cordes,$silencieux){
        $this->nom = $nom ;
        $this->prix_achat = $prix_achat ;
        $this->prix_vente = $prix_vente ;
        $this->largeur = $largeur ;
        $this->longueur = $longueur ;
        $this->nbr_touche = $touche ;
        $this->dir_cordes = $dir_cordes ;
        $this->silencieux = $silencieux ;
    }
}

class Piano_queue extends Piano {

    protected $taille ;

    public function __construct($nom,$prix_achat,$prix_vente,$largeur,$longueur,$touche,$taille){
        $this->nom = $nom ;
        $this->prix_achat = $prix_achat ;
        $this->prix_vente = $prix_vente ;
        $this->largeur = $largeur ;
        $this->longueur = $longueur ;
        $this->nbr_touche = $touche ;
        $this->taille = $taille ;
    }
}

// class Guitare extends Instrument_corde {

// }
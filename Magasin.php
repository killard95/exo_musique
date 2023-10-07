<?php
require('instrument_corde.php') ;

abstract class Instrument {
    protected $nom ;
    protected $prix_achat ;
    protected $prix_vente ;
}

abstract class Instrument_corde extends Instrument {
    protected $largeur ;
    protected $longueur ;
}

abstract class Instrument_vent extends Instrument {
    protected $type ;
}
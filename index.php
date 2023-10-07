<?php
require('Magasin.php') ;
$piano = new Piano_num("coucou","25$","75$",44,77,87,"oui","4/4") ;

echo "<br><pre>" ;
var_dump($piano) ;
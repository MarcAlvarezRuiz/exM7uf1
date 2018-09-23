<?php
$d = new DateTime();
$tipus_de_d = gettype( $d );
echo "La variable \$d 
      conté el valor " . $d->format( "d/m/Y") .
      " i és del tipus $tipus_de_d";
$classe_de_d = get_class( $d );
echo "<br>$classe_de_d";
echo "el valor de \$d és $d";

?>
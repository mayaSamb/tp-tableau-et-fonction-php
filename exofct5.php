<?php
function pluspetit($x,$y,$z)
{
    $min = min($x, $y, $z);
    return $min;

}
$x=(int) (readline ( " la premiere valeur "));
$y=(int) (readline ( " La  deuxieme valeur "));
$z=(int) (readline ( " La  troisieme valeur "));
echo " le plus petit est ".pluspetit($x,$y,$z);
    ?>
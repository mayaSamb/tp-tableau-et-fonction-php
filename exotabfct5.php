<?php
function capital($a)
{
   
    switch ($b) {
        case $b = "Paris":
            echo "France ==> Paris" ;
            break;
        case  $b = "Berlin":
            echo "Allemagne ==> Berlin";
            break;
        case $b = "Bamako":
            echo "Mali ==> Bamako";
            break;
        case  $b = "Rabat":
            echo "Maroc ==> Rabat";
            break;
        case  $b = "Madrid":
             echo "Espagne ==> Madrid";
            break;
        case  $b = "Lisbonne":
            echo "Portugal ==> lisbonne";
            break;
        case $b = "Londre":
            echo "Angleterre ==> londre";
            break;
        case $b = "dakar":
            echo "Senegal ==> dakar";
            break;
        default:
            echo "$b ==> inconnu";
    }
   
    
    


}
echo capital("Senegal");
?>
<?php
function dernierElement($tab)
{
    
    if(!empty($tab)) 
        return  max($tab);
    else
        return "null";
   
}
echo dernierElement([56,67,4,56,7,98,7])
    

?>
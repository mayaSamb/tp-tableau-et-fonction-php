<?php
function verificationPWD($a)
{
    
    if (strlen ($a) >= 8)
        return true;
    else
        return false;
}

var_dump(verificationPWD("vjhhgnkloh"));

?>
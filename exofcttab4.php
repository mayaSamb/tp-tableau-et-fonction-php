<?php
   function verificationPWD($s) {
    if(
    strlen($s) >= 8 &&
    preg_match("#[0-9].*#",$s) &&
    preg_match("#[a-z].*#",$s) &&
    preg_match("#[A-Z].*#",$s)
    ) return "true";
    else
    {
        return "false";
    }
    }
    echo verificationPWD("hfdjkhjhfu8A");
?>
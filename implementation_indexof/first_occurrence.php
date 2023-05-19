<?php
/*
* Il est inutile de parcourir la chaine $string jusqu'à la fin car la partie de celle-ci 
* de longueur inférieure à celle de la chaine $substring ne peut pas rentrer dans celle-ci.
*/
    function find($string, $substring){
        $length = strlen($substring);
        for($index = 0; $index < strlen($string) - $length + 1; $index++){
            if(($string[$index] == $substring[0]) and substr($string, $index, $length) == $substring){
                echo substr($index, $index + $length);
                return $index;
            }
        }
        return -1;
    }
$string = "Bonjour";
$substring = "on";
echo(find($string, $substring));
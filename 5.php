<?php


function jabatangan($orang)
{   
    $result = 0;
    
    for($i=1; $i<$orang;$i++){
        
        $result += $i;     
    }
    
    return $result;
    
}

echo jabatangan(6);
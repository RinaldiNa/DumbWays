<?php

function drawImage(int $n)
{
    for($i=1; $i<=$n; $i++)
    {
        for($j=1; $j<=$n;$j++)
        {
            if( (($i == 1 || $i == $n) && ($j == 1 || $j == $n)) || ($j == round(0.5*$n)) || ($i == round(0.5*$n)) )
            {
                $result = " * ";    
            }else{
                $result = " = ";
            }

            echo $result;
        }
        echo "<br>";
    }

}

drawImage(11);
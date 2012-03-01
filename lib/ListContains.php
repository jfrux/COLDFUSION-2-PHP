<?php
function ListContains($list,$substring,$delimiter=",")
{
    $delimiter = substr($delimiter,1);
    $a = explode($list,$delimiter);
    $return = 0;
    for($i=0;$i< count($a);$i++)
    {
        if(strstr($a[$i],$substring))
        {
            $return = $i + 1;
        }
    }
    return $return;
}
?>
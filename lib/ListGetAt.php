<?php
function ListGetAt($list,$position,$delimiter=",")
{
$bit = explode($delimiter,$list);
return $bit[($position-1)];
} 
?>
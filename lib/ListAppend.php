<?php
function ListAppend($list,$value,$delimiter= ",")
{
$delimiter = substr($delimiter,1);
$nList = $list . $delimiter . $value;
return $nList;
}

?>
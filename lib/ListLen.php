<?php
function ListLen($list, $delimiter="")
{
if($delimiter == "")
{
$delimiter = ",";
}
$a = explode($delimiter,$list);
return count($a);
}


?>
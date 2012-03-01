<?php
function ListFindNoCase($list,$value,$delimiter=",")
{
$a = explode($delimiter,$list);
for ($i=0;$i<count($a);$i++)
{
if(stristr($a[$i],$value))
{
return true;
}
}
return false;
}

?>
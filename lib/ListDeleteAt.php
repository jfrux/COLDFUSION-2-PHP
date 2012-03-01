<?php
function ListDeleteAt($list,$position,$delimiter)
{
$delimiter = substr($delimiter, 1);
$a = explode($delimiter,$list);
for($i=0;$i<count($a);$i++)

{
if($i != $position)
{
if(! isset($return))
{
$return = $a[$i];
}
else
{
$return .= $delimiter . $a[$i];
}
}
}
return $return;
}
?>
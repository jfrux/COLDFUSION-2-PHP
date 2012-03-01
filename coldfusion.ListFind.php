<?php
function ListFind($list,$value,$delimiter=",")
{
	$delimiter = substr($delimiter,1);
	$a = explode($delimiter,$list);
	
	for($i=0;$i<count($a);$i++)
	{
		if(strstr($a[$i],$value))
		{
			return true ;
		}
	}
	
	return false;
}
?>
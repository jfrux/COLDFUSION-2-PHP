<?php
function DateAdd($datepart,$action,$number, $date)
{

$adbit = explode(" ",$date);
$bdbit = explode("-",$adbit[0 ]);
if(count($adbit) > 1)
{
$cdbit = explode(":",$adbit[1]);
}
else
{

$cdbit = array();
$cdbit[0] = 0;
$cdbit[1] = 0;
$cdbit[2] = 0;
}
switch($datepart)
{
case "l": // Millisecond (Lower case 'L')
$e = 60/1000;
break;
case "s": // Second
$e = 1 ;
break;
case "n": // Minute
$e = 60;
break;
case "h": // Hour
$e = 60*60;
break;
case "ww": // Week
$e = ((60*60)*24)*7;
break;
case "d": // Day
$e = (( 60*60)*24);
break;
case "m": // Month
$e = (((60* 60)*24)*365)/12;
break;
case "yyyy": // Year
$e = (((60* 60)*24)*365);
break;
default:
$e = "error";
}
if($e == "error")
{
return false;
}
$intTime = mktime($cdbit[0],$cdbit[1],$cdbit[ 2],$bdbit[1],$bdbit[2],$bdbit[0]);
if($action == "+")
{
$nTime = $intTime + ($e * $number);
}
else
{
$nTime = $intTime - ($e * $number);
}
return date( "Y-m-d H:i:s",$nTime);
}

?>
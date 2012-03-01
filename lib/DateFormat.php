<?php
function DateFormat($date,$format)
{
$adbit = explode(" ",$date);
$bdbit = explode("-",$adbit[0]);
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
if(strtolower($format) == "short")
{
$dformat = "m/d/Y";
$tformat = "H:i a";
}
elseif(strtolower($format) == "medium")
{
$dformat = "M d, Y";
$tformat = "H:i:s a";
}
elseif(strtolower($format) == "long")
{
$dformat = "F d, Y";
$tformat = "H:i:s a e";
}
elseif(strtolower($format) == "full")
{
$dformat = "l F d, Y";
$tformat = "H:i:s a e";
}
if(isset($dformat) && isset($tformat))
{
$date = date($dformat,mktime($cdbit[0],$cdbit[1],$cdbit[2],$bdbit[1],$bdbit[2],$bdbit[0])) . " " . date($tformat,mktime($cdbit[0],$cdbit[1],$cdbit[2],$bdbit[1],$bdbit[2],$bdbit[0]));
}
else
{
$date = date($format,mktime($cdbit[0],$cdbit[1],$cdbit[2],$bdbit[1],$bdbit[2],$bdbit[0]));
}
return $date;
}
?>
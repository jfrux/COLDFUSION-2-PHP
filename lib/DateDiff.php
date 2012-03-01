<?php
function DateDiff($datepart, $date1, $date2)
 {
  $a = explode(" " ,$date1);
  $b = explode("-",$a[0]);
  if(count($a) > 1)
  {
   $c = explode(":",$a[1]);
  } 
  else
  {
   $c = array();$c[ 0] = 0;$c[1] = 0;$c[2] = 0;
  }
  $a1 = explode (" ",$date2);
  $b1 = explode("-",$a1[0]);
  if(count($a1) > 1)
  {
   $c1 = explode(":",$a1[1]);
  } 
  else
  {
   $c1 = array();$c1[ 0] = 0;$c1[1] = 0;$c1[2] = 0;
  }
   switch($datepart)
  {
   case "n": // Minute
    $db= 60;break;
   case "h": // Hour
    $db= 60*60;break;
   case "d": // Day
    $db=(60*60)*24;break;
   case "w": // Weeks
    $db=((60*60)*24)* 7;break;
   case "m": // Month
    $db=ceil(((( 60*60)*24)*365)/12);break;
    case "yyyy": // Year
    $db=(((60*60)*24)* 365);break;
   default:
    $db=1;
  }
  $nDate1 = mktime($c[0],$c[ 1],$c[2],$b[1],$b[2],$b[0]);
  $nDate2 = mktime($c1[ 0],$c1[1],$c1[2],$b1[1],$b1[2],$b1[0]);
  
  $rDate = $nDate1 - $nDate2;
  
  $num = number_format(($rDate/$db),4);
  
  if($num < 0)
  {
    return $num * -1;
  }
  else
  {
   return $num;
  }
 }

?>
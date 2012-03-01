<?php
function DateCompare($date1,$date2,$datepart)
    {
         $a = explode(" ",$date1);
         $b = explode("-",$a[0]);
         if(count($a) > 1)
         {
              $c = explode(":",$a[ 1]);
         } 
         else
         {
              $c = array();$c[0] = 0;$c[1] = 0;$c[2] = 0;
         }
         $a1 = explode(" ",$date2);
         $b1 = explode("-",$a1[0]);    
         if(count($a1) > 1)
         {
            $c1 = explode(":",$a1[1]);
          } 

          else
         {
              $c1 = array();$c1[0] = 0;$c1[1] = 0;$c1[2] = 0;
         }
         switch($datepart)
         {
              case "n": // Minute
                   $c[0] = 0;$c1[0] = 0;break;
              case "h": // Hour
                   $c[0] = 0;$c[1] =0;$c1[0] = 0;$c1[1] = 0;break;
             case "d": // Day
                   $c[ 0] = 0;$c[1] = 0;$c[2] = 0;$c1[ 0] = 0;$c1[1] = 0;$c1[2] = 0;break;
               case "m": // Month
                   $c[0] = 0;$c[ 1] = 0;$c[2] = 0;$c1[0] = 0;$c1[ 1] = 0;$c1[2] = 0;$b[1] = 0;$b1[1] = 0;break;
              case "yyyy": // Year
                   $c[ 0] = 0;$c[1] = 0;$c[2] = 0;$c1[0] = 0;$c1[1] = 0;$c1[2] = 0;$b[1] = 0;$b1[ 1] = 0;$b[2] = 0;$b1[3] = 0;break;
               default:
                   $e = "mc2";
         }
         $nDate1 = mktime($c[0 ],$c[1],$c[2],$b[1],$b[2],$b[0]);
         $nDate2 = mktime($c1[0],$c1[1],$c1[2],$b1[1],$b1[2],$b1[0 ]);
         if($nDate1 < $nDate2)
         {
              return -1;
         }
         elseif ($nDate1 > $nDate2)
         {
              return 1;
         }
         else
         {
               return 0;
         }
    }
?>
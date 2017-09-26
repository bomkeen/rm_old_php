<?
function f_x_numofdate($selname,$dfvalue,$selvalue){
  $strday="<select name=$selname size=1>";
  $strday.=$dfvalue;
  for ($i=1;$i<=31;$i++) {
     $sel="";
     if ($selvalue==$i) {$sel="selected";}
     $strday.="<option value=$i $sel>$i</option>";
  } 
  $strday.="</select>";
  return $strday;
}

function f_x_getofmonth($selname,$dfvalue,$selvalue) {
  $monthTH = array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
  $strvalue="<select name=$selname size=1>";
  $strvalue.=$dfvalue;
  for ($i=1;$i<=12;$i++) {
     $sel="";
     if ($selvalue==$i) {$sel="selected";}
     $strvalue.="<option value=$i $sel>".$monthTH[$i]."</option>";
  } 
  $strvalue.="</select>";
  return $strvalue;

}

function f_x_getofyear($selname,$dfvalue,$selvalue,$pyear) {
   $curryear=date("Y")+543;
   $preyear=$curryear-$pyear;
  $strvalue="<select name=$selname size=1>";
  $strvalue.=$dfvalue;
  for ($i=$preyear;$i<=$curryear;$i++) {
     $sel="";
     if ($selvalue==$i) {$sel="selected";}
     $strvalue.="<option value=$i $sel>".$i."</option>";
  } 
  $strvalue.="</select>";
  return $strvalue;

}
?>
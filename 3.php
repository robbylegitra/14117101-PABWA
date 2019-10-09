<?php
echo "(Lanirne,Aduh,Qifuat,Toda,Anevi,Samid,Kifuat)";
$abjad=array("Lanirne","Aduh","Qifuat","Toda","Anevi","Samid","Kifuat");
sort($abjad);
$clength=count($abjad);
for($x=0;$x<$clength;$x++)
   {
   echo $abjad[$x];
   echo "<br>";
   }
?>
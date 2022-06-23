<?php
$id=array("Sourabh"=>"10","Keshav"=>"5","Dhruv"=>"25");
asort($id);

foreach($id as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
?>